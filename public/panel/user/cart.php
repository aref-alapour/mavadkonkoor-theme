<?php
global $current_user_id;
global $database;

$data = $database->select('artin_wc_orders', [
    'id',
    'total_amount',
    'date_created_gmt'
], [
    'customer_id' => $current_user_id
]);
?>
<main class="rounded-[20px] w-[80%] mr-14 lg:mr-0 lg:w-full lg:rounded-[30px] border shadow-box-shadow p-6 lg:p-10">
    <?php if ($data): ?>
    <div class="space-y-4">
        <?php foreach ($data as $user_order): ?>
        <?php
            $time_order = explode(' ',$user_order['date_created_gmt']);
            $amount_order = explode('.',$user_order['total_amount']);
            $per_time = jdate('j F Y', strtotime($time_order[0]), 'fa');
            $data_items = $database->select('artin_wc_order_product_lookup', [
                'product_id',
            ], [
                'order_id' => $user_order['id']
            ]);
        ?>
        <div class="border shadow rounded-[20px] lg:rounded-[30px] p-8">
            <div class="flex flex-col lg:flex-row lg:items-center">
                <div class="flex">
                    <p class="text-[#888] text-base font-[700]"><?= $per_time ?></p>
                    <hr class="w-[3px] h-[20px] rounded-[20px] bg-[#d1d1d1] mx-[49px]">
                    <p class="text-[#888] text-base font-[700]">کد سفارش <span
                            class="text-[#0A184A] text-base font-[700]"><?= $user_order['id'] ?></span></p>
                </div>
                <hr class="hidden lg:flex w-[3px] h-[20px] rounded-[20px] bg-[#d1d1d1] mx-[49px]">
                <p class="text-[#888] text-base font-[700]">مبلغ قابل پرداخت <span
                        class="text-[#0A184A] text-base font-[700]"><?= number_format($amount_order[0]) ?></span></p>
            </div>
            <hr class="my-4">
            <?php if ($data_items): ?>
            <div class="flex flex-col lg:flex-row lg:flex-wrap gap-4">
                <?php foreach ($data_items as $item): ?>
                <div class="p-[6px] border-solid border-[1px] border-[#DADADA] rounded-[12px]">
                    <a href="<?= get_permalink($item["product_id"]) ?>" class="flex items-center">
                        <img src="<?= get_the_post_thumbnail_url($item["product_id"]) ?>" class="w-[60px] h-[60px]" alt="<?= get_the_title($item["product_id"]) ?>">
                        <p class="text-[#0A184A] text-[10px] font-[500] mr-[6px]">
                            <?= get_the_title($item["product_id"]) ?>
                        </p>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <p>اطلاعات سفارش در دسترس نیست!</p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
    <p>هنوز سفارشی ثبت نکرده‌اید.</p>
    <?php endif; ?>
</main>