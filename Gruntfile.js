// Generated on 2014-02-12 using generator-angular 0.7.1
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

//define remote directory name
var dirname = (new Date()).toISOString();

module.exports = function (grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    // Define the configuration for all the tasks
    grunt.initConfig({

        //define a secret file containin sftp login data, keep it secure and not in the repo
        secret: grunt.file.readJSON('secret.json'),
        sshconfig: {
            production: {
                host: '<%= secret.host %>',
                username: '<%= secret.username %>',
                password: '<%= secret.password %>',
                port: 22,
                path: '/var/www/words.divisionlab.com/current/'
            }
        },
        sshexec: {
            'make-release-dir': {
                command: 'mkdir -m 777 -p /var/www/words.divisionlab.com/releases/' + dirname,
                options: {
                    config: 'production'
                }
            },
            'update-symlinks': {
                command: 'rm -rf /var/www/words.divisionlab.com/current && ln -s /var/www/words.divisionlab.com/releases/' + dirname + ' /var/www/words.divisionlab.com/current',
                options: {
                    config: 'production'
                }
            },
            'symlink-components': {
                command: 'rm -rf /var/www/words.divisionlab.com/current/wp-config.php && ln -s /var/www/words.divisionlab.com/config/wp-config.php  /var/www/words.divisionlab.com/releases/' + dirname + '/wp-config.php',
                options: {
                    config: 'production'
                }
            }
        },
// our sftp file copy config
        sftp: {
            deploy: {
                files: {
                    './': ['project/**',]
                },
                options: {
                    config: 'production',
                    srcBasePath: 'project/',
                    createDirectories: true
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-ssh');
    grunt.registerTask('deploy', [
        'sshexec:make-release-dir',
        'sshexec:update-symlinks',
        'sftp:deploy',
        'sshexec:symlink-components'
    ]);
};
