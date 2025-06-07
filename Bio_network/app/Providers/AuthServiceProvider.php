<?php
use App\Models\Cv;
use App\Policies\CvPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Cv::class => CvPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
