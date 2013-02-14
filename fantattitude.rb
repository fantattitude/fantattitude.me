require 'sinatra'
require 'haml'

get '/' do
	haml :fantattitude
end
