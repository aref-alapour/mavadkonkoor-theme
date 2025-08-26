<?php
$user_id = get_current_user_id();
$user = get_user_by('id',$user_id);
$user_phone = get_user_meta($user_id, 'user_phone', true);
$user_pass_status = get_user_meta($user_id, 'user_pass', true);
?>
<main class="rounded-[20px] w-[80%] mr-14 lg:mr-0 lg:w-full lg:rounded-[30px] border shadow-box-shadow p-6 lg:p-10">
    <h3 class="text-[#0A184A] text-[20px] font-[700]">ویرایش اطلاعات کاربری</h3>
    <section id="profile-section-form" class="relative">
        <form action="" method="post" id="profile-form">
            <input type="hidden" id="status_user" name="status_user" value="<?= ($user_pass_status === 'pending') ? 'pending' : 'approved' ?>">
            <input type="hidden" id="user_id" name="user_id" value="<?= $user_id ?>">
            <div class="shadow rounded-xl p-4 mt-5 relative grid md:grid-cols-2 lg:grid-cols-3 gap-x-3 gap-y-2">
                <div>
                    <label for="first-name" class="flex flex-col gap-y-px">
                        <span class="text-[#626262] text-sm">نام:</span>
                        <input type="text" name="first_name" id="first-name" placeholder="نام"
                               class="profile-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50"
                               value="<?= $user->first_name ?>" data-current="<?= $user->first_name ?>">
                    </label>
                </div>
                <div>
                    <label for="last-name" class="flex flex-col gap-y-px">
                        <span class="text-[#626262] text-sm">نام خانوادگی:</span>
                        <input type="text" name="last_name" id="last-name" placeholder="نام خانوادگی"
                               class="profile-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50"
                               value="<?= $user->last_name ?>" data-current="<?= $user->last_name ?>">
                    </label>
                </div>
                <div>
                    <label for="user-email" class="flex flex-col gap-y-px">
                        <span class="text-[#626262] text-sm">آدرس ایمیل:</span>
                        <input type="email" name="user_email" id="user-email" placeholder="ایمیل"
                               class="profile-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50"
                               value="<?= $user->user_email ?>" data-current="<?= $user->user_email ?>">
                    </label>
                </div>
                <div>
                    <label for="display-name" class="flex flex-col gap-y-px">
                        <span class="text-[#626262] text-sm">نام نمایشی:</span>
                        <input type="text" name="display_name" id="display-name" placeholder="نام"
                               class="profile-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50"
                               value="<?= $user->display_name ?>" data-current="<?= $user->display_name ?>">
                    </label>
                </div>
                <div>
                    <label for="user-phone" class="flex flex-col gap-y-px">
                        <span class="text-[#626262] text-sm">شماره موبایل:</span>
                        <input type="tel" name="user_phone" id="user-phone" placeholder="شماره موبایل"
                               class="profile-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50"
                               value="<?= $user_phone ?>" data-current="<?= $user_phone ?>">
                    </label>
                </div>
            </div>
            <div class="shadow rounded-xl p-4 mt-5 relative">
                <h2 class="font-peyda-bold font-bold text-lg text-primary-100/500">
                    <?= ($user_pass_status === 'pending') ? 'ثبت گذرواژه' : 'تغییر گذرواژه' ?>
                </h2>
                <div class="grid lg:grid-cols-2 gap-x-3 gap-y-2">
                    <?php if($user_pass_status !== 'pending'): ?>
                    <div>
                        <label for="user-oldpass" class="flex flex-col gap-y-px">
                            <span class="text-[#626262] text-sm">گذرواژه پیشین (در صورتی که قصد تغییر ندارید، خالی بگذارید):</span>
                            <div class="relative">
                                <input type="password" name="user_oldpass" id="user-oldpass" placeholder="گذرواژه پیشین"
                                       class="profile-pass-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50">
                                <button type="button" class="pass-show-btn text-[#DCDCDC] absolute top-1/2 left-2 -translate-y-1/2">
                                    <svg class="h-4 w-4" viewBox="0 0 18 13" fill="CurrentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.94444 12.4375C3.0924 12.4375 0.191048 7.01894 0.0704375 6.78841C-0.0234792 6.60895 -0.0234792 6.3909 0.0704375 6.21144C0.191048 5.98106 3.0924 0.5625 8.94444 0.5625C14.7965 0.5625 17.6978 5.98106 17.8185 6.21159C17.9124 6.39105 17.9124 6.6091 17.8185 6.78856C17.6978 7.01894 14.7965 12.4375 8.94444 12.4375ZM1.21686 6.49911C1.88183 7.56949 4.49263 11.25 8.94444 11.25C13.4104 11.25 16.0096 7.57246 16.672 6.50089C16.0071 5.43051 13.3963 1.75 8.94444 1.75C4.47851 1.75 1.87931 5.42754 1.21686 6.49911ZM8.94444 10.0625C7.0949 10.0625 5.59028 8.46442 5.59028 6.5C5.59028 4.53558 7.0949 2.9375 8.94444 2.9375C10.794 2.9375 12.2986 4.53558 12.2986 6.5C12.2986 8.46442 10.794 10.0625 8.94444 10.0625ZM8.94444 4.125C7.71151 4.125 6.70833 5.19048 6.70833 6.5C6.70833 7.80952 7.71151 8.875 8.94444 8.875C10.1774 8.875 11.1806 7.80952 11.1806 6.5C11.1806 5.19048 10.1774 4.125 8.94444 4.125Z"
                                              fill="CurrentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </label>
                    </div>
                    <?php endif; ?>
                    <div>
                        <label for="user-newpass" class="flex flex-col gap-y-px">
                            <span class="text-[#626262] text-sm">گذرواژه جدید (<?= ($user_pass_status === 'pending') ? 'در صورتی که قصد ایجاد رمز ثابت ندارید، خالی بگذارید' : 'در صورتی که قصد تغییر ندارید، خالی بگذارید' ?>):</span>
                            <div class="relative">
                                <input type="password" name="user_newpass" id="user-newpass" placeholder="گذرواژه جدید"
                                       class="profile-pass-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50">
                                <button type="button" class="pass-show-btn text-[#DCDCDC] absolute top-1/2 left-2 -translate-y-1/2">
                                    <svg class="h-4 w-4" viewBox="0 0 18 13" fill="CurrentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.94444 12.4375C3.0924 12.4375 0.191048 7.01894 0.0704375 6.78841C-0.0234792 6.60895 -0.0234792 6.3909 0.0704375 6.21144C0.191048 5.98106 3.0924 0.5625 8.94444 0.5625C14.7965 0.5625 17.6978 5.98106 17.8185 6.21159C17.9124 6.39105 17.9124 6.6091 17.8185 6.78856C17.6978 7.01894 14.7965 12.4375 8.94444 12.4375ZM1.21686 6.49911C1.88183 7.56949 4.49263 11.25 8.94444 11.25C13.4104 11.25 16.0096 7.57246 16.672 6.50089C16.0071 5.43051 13.3963 1.75 8.94444 1.75C4.47851 1.75 1.87931 5.42754 1.21686 6.49911ZM8.94444 10.0625C7.0949 10.0625 5.59028 8.46442 5.59028 6.5C5.59028 4.53558 7.0949 2.9375 8.94444 2.9375C10.794 2.9375 12.2986 4.53558 12.2986 6.5C12.2986 8.46442 10.794 10.0625 8.94444 10.0625ZM8.94444 4.125C7.71151 4.125 6.70833 5.19048 6.70833 6.5C6.70833 7.80952 7.71151 8.875 8.94444 8.875C10.1774 8.875 11.1806 7.80952 11.1806 6.5C11.1806 5.19048 10.1774 4.125 8.94444 4.125Z"
                                              fill="CurrentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label for="user-confirmpass" class="flex flex-col gap-y-px">
                            <span class="text-[#626262] text-sm">تکرار گذرواژه جدید:</span>
                            <div class="relative">
                                <input type="password" name="user_confirmpass" id="user-confirmpass" placeholder="تکرار گذرواژه جدید"
                                       class="profile-pass-input border border-[#EEEEEE] rounded-[50px] h-10 w-full px-4 text-sm focus:outline-primary-100/50">
                                <button type="button" class="pass-show-btn text-[#DCDCDC] absolute top-1/2 left-2 -translate-y-1/2">
                                    <svg class="h-4 w-4" viewBox="0 0 18 13" fill="CurrentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.94444 12.4375C3.0924 12.4375 0.191048 7.01894 0.0704375 6.78841C-0.0234792 6.60895 -0.0234792 6.3909 0.0704375 6.21144C0.191048 5.98106 3.0924 0.5625 8.94444 0.5625C14.7965 0.5625 17.6978 5.98106 17.8185 6.21159C17.9124 6.39105 17.9124 6.6091 17.8185 6.78856C17.6978 7.01894 14.7965 12.4375 8.94444 12.4375ZM1.21686 6.49911C1.88183 7.56949 4.49263 11.25 8.94444 11.25C13.4104 11.25 16.0096 7.57246 16.672 6.50089C16.0071 5.43051 13.3963 1.75 8.94444 1.75C4.47851 1.75 1.87931 5.42754 1.21686 6.49911ZM8.94444 10.0625C7.0949 10.0625 5.59028 8.46442 5.59028 6.5C5.59028 4.53558 7.0949 2.9375 8.94444 2.9375C10.794 2.9375 12.2986 4.53558 12.2986 6.5C12.2986 8.46442 10.794 10.0625 8.94444 10.0625ZM8.94444 4.125C7.71151 4.125 6.70833 5.19048 6.70833 6.5C6.70833 7.80952 7.71151 8.875 8.94444 8.875C10.1774 8.875 11.1806 7.80952 11.1806 6.5C11.1806 5.19048 10.1774 4.125 8.94444 4.125Z"
                                              fill="CurrentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </label>
                    </div>
                </div>
                <button id="add-edit-btn"
                        class="bg-primary-500 hover:bg-primary-600 transition text-sm text-white flex justify-center items-center mt-2 gap-x-2 h-10 w-36 mr-auto rounded-[45px]">
                    ذخیره تغییرات
                </button>
            </div>
        </form>

    </section>
</main>