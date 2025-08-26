<?php global $user_login; global $panel_view; ?>
<aside id="panel-aside" class="fixed top-1/2 -translate-y-1/2 lg:-translate-y-0 lg:top-30 flex flex-col rounded-none max-w-[300px] lg:min-w-[300px] lg:sticky">
    <nav class="flex flex-col items-center pt-10 pb-5 w-full border border-solid bg-violet-100 border-neutral-200 rounded-tl-[30px] rounded-bl-[30px] lg:rounded-[30px] relative">
        <button id="panel-section-toggle" class="flex w-6 h-6 bg-white rounded-full drop-shadow-box-shadow border items-center justify-center border-neutral-200 absolute top-6 -left-3 lg:hidden">
            <svg class="w-2 h-4"><use href="#dashboard-arrow-icon"></use></svg>
            <svg class="w-2 h-4"><use href="#dashboard-arrow-icon"></use></svg>
        </button>
        <div class="flex gap-5 self-center ml-3 w-full text-right max-w-[229px]">
            <img loading="lazy" src="<?= Theme_ASSET_URL ?>images/dependencies/user-profile.png" alt="User avatar" class="object-contain shrink-0 rounded-none aspect-square w-[30px] lg:w-[68px] mx-auto" />
            <div class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">
                <h2 class="text-heavy-h6 font-heavy-yekanbakh">کاربر محترم</h2>
                <p class="text-bold-b1 font-bold-yekanbakh text-[#4D5656]"><?= $user_login ?></p>
            </div>
        </div>
        <hr class="my-[24px] h-[2px] w-full lg:mx-[36px] bg-[white]">
        <ul class="text-bold-b1 font-bold-yekanbakh w-full space-y-4">
            <li class="w-full">
                <a href="<?php bloginfo('url'); echo '/my-account/?view=dashboard'; ?>" class="flex gap-6 items-center lg:px-10 py-1 w-full text-base leading-8 text-right whitespace-nowrap <?= (($panel_view == null) || ($panel_view == 'dashboard')) ? 'bg-white' : 'hover:bg-gray-50 transition' ?> text-indigo-950">
                    <svg class="w-4 h-4 stroke-[#6530ED] mx-auto lg:mx-0">
                        <use href="#mavad-dashboard-panel-icon"></use>
                    </svg>
                    <span class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">پیشخوان</span>
                </a>
            </li>
            <li class="w-full">
                <a href="<?php bloginfo('url'); echo '/my-account/?view=authentication'; ?>" class="flex gap-6 items-center lg:px-10 py-1 w-full text-base leading-8 text-right  whitespace-nowrap <?= ($panel_view == 'authentication') ? 'bg-white' : 'hover:bg-gray-50 transition' ?> text-indigo-950">
                    <svg class="w-[20px] h-[20px] stroke-[#6530ED] mx-auto lg:mx-0">
                        <use href="#mavad-dashboard-panel-icon-Authentication"></use>
                    </svg>
                    <span class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">احراز هویت</span>
                </a>
            </li>
            <li class="w-full">
                <a href="<?php bloginfo('url'); echo '/my-account/?view=cart'; ?>" class="flex gap-6 w-full lg:px-10 py-1 items-center text-base leading-8 text-right whitespace-nowrap <?= ($panel_view == 'cart') ? 'bg-white' : 'hover:bg-gray-50 transition' ?> text-indigo-950">
                    <svg class="w-[20px] h-[20px] mx-auto lg:mx-0">
                        <use href="#mavad-dashboard-panel-icon-bill"></use>
                    </svg>
                    <span class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">صورت حساب</span>
                </a>
            </li>
            <li class="w-full">
                <a href="<?php bloginfo('url'); echo '/my-account/?view=ticket'; ?>" class="flex gap-6 w-full lg:px-10 py-1 items-center text-base leading-8 text-right whitespace-nowrap <?= ($panel_view == 'ticket') ? 'bg-white' : 'hover:bg-gray-50 transition' ?> text-indigo-950">
                    <svg class="w-[20px] h-[20px] mx-auto lg:mx-0">
                        <use href="#mavad-dashboard-panel-icon-ticket"></use>
                    </svg>
                    <span class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">تیکت‌های من</span>
                </a>
            </li>
             <li class="w-full">
                <a href="<?php bloginfo('url'); echo '/my-account/?view=profile'; ?>" class="flex gap-6 w-full lg:px-10 py-1 items-center text-base leading-8 text-right whitespace-nowrap <?= ($panel_view == 'profile') ? 'bg-white' : 'hover:bg-gray-50 transition' ?> text-indigo-950">
                    <svg class="w-[20px] h-[20px] mx-auto lg:mx-0">
                        <use href="#mavad-dashboard-panel-icon-setting"></use>
                    </svg>
                    <span class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">اطلاعات کاربری</span>
                </a>
            </li>
        </ul>
        <div class="mt-20 w-full flex flex-col">
            <hr class="my-[24px] h-[2px] lg:mx-[36px] bg-[white]">
            <button id="panel-logout" data-link="<?= wp_logout_url(home_url()); ?>" class="flex gap-6 w-full lg:px-10 py-1 items-center text-base leading-8 text-right hover:bg-gray-50 whitespace-nowrap text-indigo-950 transition text-bold-b1 cursor-pointer font-bold-yekanbakh">
                <svg class="w-[22px] h-[22px] stroke-[#6530ED] mx-auto lg:mx-0">
                    <use href="#mavad-dashboard-panel-icon-exit"></use>
                </svg>
                <span class="panel-link-title hidden w-0 lg:block lg:w-max overflow-x-hidden">خروج</span>
            </button>
        </div>
    </nav>
</aside>