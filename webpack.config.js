var path = require('path');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {

   entry: './assets/js/app.js',
	output: {
		path: path.resolve(__dirname, 'public/js/'),
		filename: 'app.bundle.js'
	},
   	module: {
		rules: [

			{
		    	test  : /\.scss$/,
		    	loader:  ExtractTextPlugin.extract({
		    		fallback:"style-loader",
		    		use:"css-loader!sass-loader"
		    	})
	   		},
	   		{
		    	test  : /\.(jpe?g|png|gif|svg)$/i,
		    	use: [
		    		"file-loader?name=[name].[ext]&outputPath=../img/",
		    		'image-webpack-loader'
		    	]
	   		},
	   		{
                test: /\.(eot|svg|ttf|woff|woff2)$/,
                loader: 'file-loader?name=[name].[ext]&outputPath=../fonts/'
            }
		],

	},
   	plugins: [
       new ExtractTextPlugin('./../css/app.css'),
       new BrowserSyncPlugin({
	    	host: 'localhost',
	    	port: 3000,
	    	files: ['./*.php'],
	    	proxy: 'localhost',
	    })
 	],
   	watch: true,
  
};
