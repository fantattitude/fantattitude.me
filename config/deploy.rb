require "bundler/capistrano"

set :application, "fantattitude.me"
set :repository,  "git@fantattitude.me:fantattitude.git"

set :scm, :git
set :deploy_via, :remote_cache

set :user, "fantattitude"
set :use_sudo, false

set :default_environment, {
	'PATH' => "/home/fantattitude/.rbenv/shims:/home/fantattitude/.rbenv/bin:$PATH"
}

# set :scm, :git # You can set :scm explicitly or Capistrano will make an intelligent guess based on known version control directory names
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "#{application}"                          # Your HTTP server, Apache/etc
role :app, "#{application}"                          # This may be the same as your `Web` server

set :deploy_to, "/srv/http/fantattitude.me"
set :normalize_asset_timestamps, false

namespace :deploy do
	desc "Start unicorn"
	task :start do
		run "cd #{deploy_to}/current && bundle exec rake assets && mkdir tmp/sockets && bundle exec unicorn -D -c config/unicorn.rb"
	end
	desc "Stop unicorn"
	task :stop do
		run "cd #{deploy_to}/current && kill -s \"QUIT\" `cat tmp/pids/unicorn.pid`"
	end
	task :restart do
		run "cd #{deploy_to}/current && kill -s \"QUIT\" `cat tmp/pids/unicorn.pid`"
		run "cd #{deploy_to}/current && bundle exec rake assets && mkdir tmp/sockets && bundle exec unicorn -D -c config/unicorn.rb"
	end
end

# if you want to clean up old releases on each deploy uncomment this:
# after "deploy:restart", "deploy:cleanup"

# if you're still using the script/reaper helper you will need
# these http://github.com/rails/irs_process_scripts
