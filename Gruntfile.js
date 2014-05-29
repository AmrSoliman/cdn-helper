/**
 * Creates symlinks for the multiple endpoints
 *
 * Requires npm, which is part of node.js <http://nodejs.org/>
 * To run:
 *   npm install
 *   grunt
 */
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        paths: {
            src: 'src',
            tests: 'tests',
        },
        
        phpunit: {
            classes: {
                dir: '<%= paths.tests %>'
            },
            options: {
                colors: true
            }
        },
        watch: {
            tests: {
                files: [
                    '<%= paths.tests %>/**/*.php',
                    '<%= paths.src %>/**/*.php',
                ],
                tasks: ['phpunit']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-phpunit');
    grunt.loadNpmTasks('grunt-notify');

    grunt.registerTask('default', 'phpunit');
}
