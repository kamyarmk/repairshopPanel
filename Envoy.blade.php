@servers(['localhost' => '127.0.0.1'])

@story('updater')
    update-code
@endstory

@task('update-code')
    git pull
@endtask


@story('deploy')
    add
    commit
    push
@endstory

@task('add')
    git add *
@endtask

@task('commit')
    git commit -m {{ $changes }}
@endtask

@task('push')
    git push
@endtask