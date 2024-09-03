<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';

// Config

set('application', 'leadtonext.com');
set('repository', 'git@github.com:33sKamal/leadtonext.git');
set('branch', 'master');
set('keep_releases', 5);

// Config

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('production')
    ->set('hostname', '100.42.177.183')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/{{application}}/production')
    ->set('stage', 'production');

// Hooks

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:config:cache',
    // 'artisan:route:cache',
    'artisan:view:cache',
    'artisan:event:cache',
    'artisan:migrate',
    // 'artisan:horizon:terminate',
    'pnpm:install',
    'pnpm:build',
    'deploy:publish',
    // 'artisan:octane:reload',
    'pm2:restart',
    'pm2:restart_horizon', // Add this line
]);

task('pnpm:install', function () {
    run('cd {{release_path}} && pnpm install');
});

task('pnpm:build', function () {
    run('cd {{release_path}} && pnpm run build');
});

// Custom PM2 tasks
task('pm2:restart', function () {
    // Run PM2 command as deployer user
    run('pm2 restart leadtonext-octane --update-env');
});

task('pm2:restart_horizon', function () {
    // Restart Horizon via PM2
    run('pm2 restart leadtonext-horizon --update-env');
});

after('deploy:failed', 'deploy:unlock');
