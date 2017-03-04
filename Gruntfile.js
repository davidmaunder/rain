module.exports = function(grunt) {

  // Measures the time each task takes
  require('time-grunt')(grunt);

  grunt.initConfig({
    // WATCH
    watch: {
      css: {
        files: ['css/*.scss', 'css/*.css'],
        tasks: ['sass', 'cssmin'],
        options: {
          spawn: false
        }
      }
    },

    // JS UGLIFY
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['js/libs/*.js', 'js/bootstrap.min.js', 'js/*.js'], //input
        dest: 'js/build/global.min.js' //output
      },
    },

    // SASS
    sass: {
      dist: {                          
        options: {
          style: 'compressed' //'expanded' or 'compressed'
        },
        files: {
          'css/build/global.css': 'css/global.scss'
        },
      },
    },

    // CSS MIN
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'css/bootstrap-global.css': ['css/bootstrap.css', 'css/bootstrap-theme.css', 'css/bootstrap-hover-nav.css']
        }
      }
    },

  });


  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-notify');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'sass', 'cssmin', 'watch']);

};