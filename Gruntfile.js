'use strict';

module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({

        // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',

        // Task configuration.
        clean: {
            options: {
                force: true
            },
            files: ['style.css']
        },
        compass: {
            dist: {
                options: {
                    //config: 'config.rb'
                    sassDir: 'sass',
                    cssDir: '../oriental',
					//cssPath: '',
                    //specify: 'sass/**/*.scss',
                    outputStyle: 'compact',
					noLineComments: true
                }
            }
        },
        watch: {
          sassy: {
            files: ['sass/**/*.scss'],
            tasks: ['compass'],
            options: {
                spawn: false
            }
          }
        }
        ,
        browser_sync: {
            files: {
                src : ['style.css']
            },
            options: {
                watchTask: true
            }
        }
    });



    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // Default task.
    grunt.registerTask('local', ['clean', 'compass', 'browser_sync', 'watch']);
    grunt.registerTask('default', ['clean', 'compass',]);


};