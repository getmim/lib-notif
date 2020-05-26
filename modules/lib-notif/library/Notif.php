<?php
/**
 * Notif
 * @package lib-notif
 * @version 0.0.1
 */

namespace LibNotif\Library;


class Notif
{
    private static $last_error;

    private static function setError(string $error): bool{
        self::$last_error = $error;
        return false;
    }

    static function send(array $meta, $data, array $providers=null): bool{
        $handlers = \Mim::$app->config->libNotif->handlers ?? [];
        if(!$handlers)
            return self::setError('No handler registered');

        $handlers = (array)$handlers;

        if(is_null($providers))
            $providers = array_keys($handlers);

        if(!$providers)
            return true;

        foreach($handlers as $name => $class){
            if(in_array($name, $providers)){
                $result = $class::send($meta, $data);
                if(!$result)
                    return self::setError( $class::lastError() );
            }
        }

        return true;
    }

    static function lastError(): ?string{
        return self::$last_error;
    }
}