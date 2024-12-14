<?php

namespace Container9ljdbyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerFailedMessagesShow_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_failed_messages_show.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.messenger_failed_messages_show.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:failed:show', [], 'Show one or more messages from the failure transport', false, #[\Closure(name: 'console.command.messenger_failed_messages_show', class: 'Symfony\\Component\\Messenger\\Command\\FailedMessagesShowCommand')] fn (): \Symfony\Component\Messenger\Command\FailedMessagesShowCommand => ($container->privates['console.command.messenger_failed_messages_show'] ?? $container->load('getConsole_Command_MessengerFailedMessagesShowService')));
    }
}
