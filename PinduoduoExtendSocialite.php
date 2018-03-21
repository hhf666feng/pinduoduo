<?php

namespace SocialiteProviders\Weixin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PinduoduoExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'pinduoduo', __NAMESPACE__.'\Provider'
        );
    }
}
