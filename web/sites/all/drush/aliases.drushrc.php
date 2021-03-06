<?php

// GPII Main Site

$aliases['gpiiprod'] = array(
  'uri' => 'preview.gpii.net',
  'root' => '/var/www/clients/client1/web17/web',
  'remote-host' => 'web06.pushing7.com',
  'remote-user' => 'rtfwebdevspace',
  'path-aliases' => array(
    '%dump' => '/var/www/clients/client1/web17/tmp/dump.sql',
    '%dump-dir' => '/var/www/clients/client1/web17/tmp',
    '%files' => 'sites/gpii.net/files',
  ),
  // Read only - force the sql-sync & rsync to simulate transfer to this server
  'command-specific' => array (
    'sql-sync' => array (
      'simulate' => '1',
    ),
    'rsync' => array (
      'simulate' => '1',
    ),
  ),
);

$aliases['gpiistaging'] = array(
  'uri' => 'staging.gpii.net',
  'root' => '/var/www/clients/client3/web18/web',
  'remote-host' => '192.168.123.74',
  'remote-user' => 'p7rtfweb',
  'path-aliases' => array(
    '%dump' => '/var/www/clients/client3/web18/tmp/dump.sql',
    '%dump-dir' => '/var/www/clients/client3/web18/tmp',
    '%files' => 'sites/gpii.net/files',
  ),
);

$aliases['gpiidev'] = array(
  'uri' => 'dev.gpii.net',
  'root' => '/var/www/developerspace.gpii.net',
  'remote-host' => '127.0.0.1',
  'remote-user' => 'caldwell',
  'path-aliases' => array(
    '%dump' => '/tmp/dump.sql',
    '%dump-dir' => '/tmp',
    '%files' => 'sites/gpii.net/files'
  ),
);

// DeveloperSpace

$aliases['devspaceprod'] = array(
  'uri' => 'developerspace.gpii.net',
  'root' => '/var/www/clients/client1/web17/web',
  'remote-host' => 'web06.pushing7.com',
  'remote-user' => 'rtfwebdevspace',
  'path-aliases' => array(
    '%dump' => '/var/www/clients/client1/web17/tmp/dump.sql',
    '%dump-dir' => '/var/www/clients/client1/web17/tmp',
    '%files' => 'sites/developerspace.gpii.net/files',
  ),
  // Read only - force the sql-sync & rsync to simulate transfer to this server
  'command-specific' => array (
    'sql-sync' => array (
      'simulate' => '1',
    ),
    'rsync' => array (
      'simulate' => '1',
    ),
  ),
);

$aliases['devspacestaging'] = array(
  'uri' => 'staging.developerspace.gpii.net',
  'root' => '/var/www/clients/client3/web18/web',
  'remote-host' => '192.168.123.74',
  'remote-user' => 'p7rtfweb',
  'path-aliases' => array(
    '%dump' => '/var/www/clients/client3/web18/tmp/dump.sql',
    '%dump-dir' => '/var/www/clients/client3/web18/tmp',
    '%files' => 'sites/developerspace.gpii.net/files',
  ),
);

$aliases['devspacedev'] = array(
  'uri' => 'dev.developerspace.gpii.net',
  'root' => '/var/www/developerspace.gpii.net',
  'remote-host' => '127.0.0.1',
  'remote-user' => 'caldwell',
  'path-aliases' => array(
    '%dump' => '/tmp/dump.sql',
    '%dump-dir' => '/tmp',
    '%files' => 'sites/developerspace.gpii.net/files',
  ),
);

// SAA

$aliases['saaprod'] = array(
  'uri' => 'saa.gpii.net',
  'root' => '/var/www/clients/client1/web17/web',
  'remote-host' => 'web06.pushing7.com',
  'remote-user' => 'rtfwebdevspace',
  'path-aliases' => array(
    '%dump' => '/var/www/clients/client1/web17/tmp/dump.sql',
    '%dump-dir' => '/var/www/clients/client1/web17/tmp',
    '%files' => 'sites/saa.gpii.net/files',
  ),
  // Read only - force the sql-sync & rsync to simulate transfer to this server
  'command-specific' => array (
    'sql-sync' => array (
      'simulate' => '1',
    ),
    'rsync' => array (
      'simulate' => '1',
    ),
  ),
);

$aliases['saastaging'] = array(
  'uri' => 'saa.gpii.net',
  'root' => '/var/www/clients/client3/web18/web',
  'remote-host' => '192.168.123.74',
  'remote-user' => 'p7rtfweb',
  'path-aliases' => array(
    '%dump' => '/var/www/clients/client3/web18/tmp/dump.sql',
    '%dump-dir' => '/var/www/clients/client3/web18/tmp',
    '%files' => 'sites/saa.gpii.net/files',
  ),
);

$aliases['saadev'] = array(
  'uri' => 'saa.gpii.net',
  'root' => '/var/www/dev.gpii.net',
  'remote-host' => '127.0.0.1',
  'remote-user' => 'caldwell',
  'path-aliases' => array(
    '%dump' => '/tmp/dump.sql',
    '%dump-dir' => '/tmp',
    '%files' => 'sites/saa.gpii.net/files',
  ),
   // Read only - force the sql-sync & rsync to simulate transfer to this server
  'command-specific' => array (
    'sql-sync' => array (
      'simulate' => '0',
    ),
    'rsync' => array (
      'simulate' => '0',
    ),
  ),
);
