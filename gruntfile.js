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
    
  watch: {
    options: {
      spawn: false,
      //livereload: true
    },
    scripts: {
      files: [
        '**/*.js',
        '**/*.scss'
      ],
      tasks: ['sass']
    }
  }
      
  }); //initConfig

  //grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-sass');
  //grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('default', ['sass', 'watch']);


}; //wrapper function