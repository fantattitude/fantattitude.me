worker_processes 2
preload_app true
timeout 30
pid 'tmp/pids/unicorn.pid'
listen 'unix:tmp/sockets/fantattitude.sock'
