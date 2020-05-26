<?php
/**
 * Handler
 * @package lib-notif
 * @version 0.0.1
 */

namespace LibNotif\Iface;


interface Handler
{
    /**
     * Send new notification
     * @param array $meta Meta data
     *  @param mixed $target Target user/device to send to
     *  @param string $title Notification title
     *  @param string $info Notification info
     * @param mixed $data The notification data.
     * @return boolean true on success false otherwise
     */
    static function send(array $meta, $data): bool;

    static function lastError(): ?string;
}