module.exports = function(grunt) {

	grunt.initConfig({
		pkg : grunt.file.readJSON('package.json'),

		watch : {
			content : {
				files : 'php/*.php',
				tasks : ['newer:htmlmin']
			}, //this live reloads php also

			images : {
				files : ['images/src/*.{png,jpg,gif}'],
				tasks : ['newer:imagemin']
			}, // watch images added to src

			deleting_images : {
				files : ['images/src/*.{png,jpg,gif}'],
				tasks : ['delete_sync:delete_images']
			}, // end of delete sync for images

			scripts : {
				files : ['js/libs/*.js', 'js/custom/*.js', '!js/libs/prism.js'],
				tasks : ['concat', 'uglify'],
				options : {
					spawn : false,
				},
			}, //end of watch scripts

			scriptsIndex : {
				files : ['js/index-js/index.js'],
				tasks : ['uglify:scriptsIndex'],
				options : {
					spawn : false,
				},
			},

			css : {
				files : ['sass/**/*.scss', '!.sass-cache'],
				tasks : ['sass', 'autoprefixer', 'penthouse'],
				options : {
					spawn : false,
				}
			}, //end of sass watch

		}, //end of watch

		/* ====================================================================================================================================================
		 * ====================================================================================================================================================

		 Tasks

		 ====================================================================================================================================================
		 ====================================================================================================================================================
		 */

		penthouse : {
			extract : {
				outfile : 'css/above-the-fold.css.php',
				css : 'css/main.css',
				url : 'http://localhost:3000/valeriopierbattista.com-2015',
				width : 1300,
				height : 500
			},
		},

		htmlmin : {
			dist : {
				options : {
					removeComments : true,
					collapseWhitespace : true,
					minifyJS : true,
					minifyCSS : true
				},
				files : [{
					expand : true, // Enable dynamic expansion.
					cwd : 'php/', // Src matches are relative to this path.
					src : ['*.php'], // Actual pattern(s) to match.
					dest : './', // Destination path prefix.
					ext : '.php', // Dest filepaths will have this extension.
					extDot : 'first' // Extensions in filenames begin after the first dot
				}]
			}
		},

		delete_sync : {
			delete_images : {
				cwd : 'images/dist',
				src : ['**'],
				syncWith : 'images/src'
			} //end of delete images
		}, // end of delete sync

		imagemin : {
			dynamic : {
				files : [{
					expand : true, // Enable dynamic expansion
					cwd : 'images/src/', // source images (not compressed)
					src : ['**/*.{png,jpg,gif}'], // Actual patterns to match
					dest : 'images/dist/' // Destination of compressed files
				}]
			}
		}, //end imagemin

		concat : {
			dist : {
				src : ['js/libs/*.js', 'js/custom/*.js', '!js/libs/prism.js'],
				dest : 'js/build/production.js'
			}
		}, //end concat

		uglify : {
			dist : {
				src : 'js/build/production.js',
				dest : 'js/build/production.min.js'
			},

			scriptsIndex : {
				src : 'js/index-js/index.js',
				dest : 'js/build/index.min.js'
			}
		}, //end uglify

		sass : {
			dist : {
				options : {
					style : 'compressed', //no need for config.rb
					compass : 'true', //no need to @import compass
					require : ['susy', 'sassy-buttons']
					// plugins if needed!
				},
				files : {
					'css/main.css' : 'sass/main.scss'
				}
			}
		}, //end of sass

		autoprefixer : {

			options : {
				map : true,
				browsers : ['> 5%', 'last 2 version', 'ie 8', 'ie 9']
			},

			dist : {
				files : {
					'css/main.css' : 'css/main.css'
				}

			}
		}, //end of autoprefixer

		browserSync : {
			dev : {
				bsFiles : {
					src : ['css/*.css', 'images/*.*', 'js/build/production.min.js', '*.php']
				},
				options : {

					proxy : "http://localhost/valeriopierbattista.com-2015/",
					watchTask : true // < VERY important

				}
			}
		},

		ftpush : {
			build : {
				auth : {
					host : 'ftp.valeriopierbattista.com',
					port : 21,
					authKey : 'key1'
				},
				src : './',
				dest : '/www',
				exclusions : ['.sass-cache', '.git', 'images/src','node_modules','.ftppass','.gitignore','gruntfile.js','README.md','php','package.json'],
				keep : ['blog','cv','projects'],
				simple : false,
				useList : false
			}
		}
	});

	// load npm tasks
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-browser-sync');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-newer');
	grunt.loadNpmTasks('grunt-delete-sync');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-penthouse');
	grunt.loadNpmTasks('grunt-ftpush');

	// define tasks
	grunt.registerTask('default', ["browserSync", "watch"]);
	
};
