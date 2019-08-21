<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Reply extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "thread";
    const HEAD_LABELS = "threads";
    const TAIL_LABEL = "author";
    const TAIL_LABELS = "authors";
    
    const TAIL_CALLABLE_LABEL = "threadReply";
    const TAIL_CALLABLE_LABELS = "threadReplies";
    const HEAD_CALLABLE_LABEL = "reply";
    const HEAD_CALLABLE_LABELS = "replies";

    const FEED_SIMPLE_LABEL = "[%tail.username%|%tail.id%] replied the thread [%head.title%|%head.id%]";
    const FEED_AGGREGATED_LABEL = "%tail.username% replied some threads";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\Thread::class];
    

    const FIELDS = "{\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"reply_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

}

/* Predicate to load as a partial */
class ReplyPredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = true;
    
    const T_CONSUMER = false;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class ReplyNotification extends Foundation\ActorOut\SubscribeNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 2332
 * Compilation Time: 11
 * b3542b537367b13be8d1898c2c5ecf55
 ******************************************************/