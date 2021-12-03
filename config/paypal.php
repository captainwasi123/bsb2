<?php
return [ 
    'client_id' => 'ATGh_fwguT48kFwIhZO_zQjeoHj-6FFRTNWSbvRT0pVxJ78MgHupXM6WCCxlwrlQB0VSu6oKVh1LjdS0',
	'secret' => 'EKZOO8uMaYlls3hbZNf-4_3TtuxbkJvyi79y5xIUYiPrAeNlxn_rrvNHBovmV5tuxD0xiKKZUV3WvNr5',
    'settings' => array(
        'mode' => 'live',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];