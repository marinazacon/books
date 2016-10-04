<?php
/**
 * Copy this file to pdo.local.php; that will be your configuration, edit it accordingly.
 *
 * The new pdo.local.php file will be ignored by version control and thus can include sensitive data.
 */


$dbParams = array(
    'driver' => 'Pdo',
    'database' => 'books',
    'hostname'  => 'localhost',
    'username' => 'root',
    'password' => 'Marina2016',
    // buffer_results - only for mysqli buffered queries, skip for others
    'options' => array('buffer_results' => true),
);
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) use ($dbParams) {
                $adapter = new BjyProfiler\Db\Adapter\ProfilingAdapter(array(
                    'driver'    => $dbParams['driver'],
                    'dsn'       => 'mysql:dbname='.$dbParams['database'].';host='.$dbParams['hostname'],
                    'username'  => $dbParams['username'],
                    'password'  => $dbParams['password'],
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                ));

                if (php_sapi_name() == 'cli') {
                    $logger = new Zend\Log\Logger();
                    // write queries profiling info to stdout in CLI mode
                    $writer = new Zend\Log\Writer\Stream('php://output');
                    $logger->addWriter($writer, Zend\Log\Logger::DEBUG);
                    $adapter->setProfiler(new BjyProfiler\Db\Profiler\LoggingProfiler($logger));
                } else {
                    $adapter->setProfiler(new BjyProfiler\Db\Profiler\Profiler());
                }
                if (isset($dbParams['options']) && is_array($dbParams['options'])) {
                    $options = $dbParams['options'];
                } else {
                    $options = array();
                }
                $adapter->injectProfilingStatementPrototype($options);
                return $adapter;
            },
        ),
    ),
);
