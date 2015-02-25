<?php
namespace SocialiteProviders\Jawbone;

use SocialiteProviders\Manager\SocialiteWasCalled;

class JawboneExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'jawbone', __NAMESPACE__.'\Provider'
        );
    }
}
