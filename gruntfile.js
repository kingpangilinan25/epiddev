module.exports = function(grunt) {
  grunt.initConfig({
      
  sass: {
    dist: {
      options: {
        style: 'expanded' //expanded
      },
      files: [{
        src: 'components/sass/style.scss',
        dest: 'epidemicmarketing/css/style-layout2.css'
      }]
    }
  }, //sass
    
browserSync: {
    dev: {
        bsFiles: {
            src : 'epidemicmarketing/css/*.css'
        },
        options: {
            watchTask: true,
            proxy: "localhost/epidemic"
        }
    }
},
    
  watch: {
    options: {
      spawn: false,
      livereload: true
    },
    scripts: {
      files: [
        'components/scripts/**/*.js',
        'components/sass/**/*.scss',
        'builds/development/**/*.html',
      ],
      tasks: ['sass']
    }      
  }
      
  }); //initConfig

  //grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-sass');
  //grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  
  grunt.registerTask('default', ['sass', 'browserSync', 'watch']);


}; //wrapper function