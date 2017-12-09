module.exports = function(grunt) {
  grunt.initConfig({
      
    sass: {
      dist: {
        options: {
          style: 'expanded' //expanded
        },
        files: [{
          src: 'components/sass/style.scss',
          dest: 'epidemicmarketing/css/style-layout.css'
        }]
      }
    }, //sass
      
  }); //initConfig

  //grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-sass');
  //grunt.loadNpmTasks('grunt-contrib-connect');
  //grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('default', ['sass']);


}; //wrapper function