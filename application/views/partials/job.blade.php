<div class="span2">
    <img class="pull-left avatar" src="/assets/user-3.png" alt="user">
    <strong>Created by:</strong>
    <p>{{ Str::title($job->user->username) }}</p>
    <span class="label label-success"><small>{{ __('jobs.employer') }}</small></span>
    <hr>
    <h4>{{ $job->title }}</h4>
    <ul class="tags">
        <li>{{ __('jobs.from') . ' : ' . date('F d, Y', strtotime($job->start_date)) }}</li>
        <li>{{ __('jobs.to') . ' : ' . date('F d, Y', strtotime($job->end_date)) }}</li>
        <li>{{ __('jobs.salary') . ' : KES ' . $job->salary }}</li>
    </ul>
</div>