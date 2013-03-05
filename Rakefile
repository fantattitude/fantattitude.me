require 'sass'

task :default => nil

desc 'Compile sass assets'
task :assets do
	sassengine = Sass::Engine.for_file('assets/style.sass', :syntax => :sass, :style => :compressed, :cache => false)
	css = sassengine.render()
	File.open('style.css', 'w') { |f| f.write(css) }
end
