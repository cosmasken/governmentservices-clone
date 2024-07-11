@servers(['ecitizen' => 'webmasters@197.248.4.207', 'eothers' => 'webmaster@197.248.7.59'])

@task('deploy', ['on' => ['ecitizen', 'eothers'], 'parallel' => true])
    cd ecitizen-html
    git pull origin master
@endtask
