<?php

/** @var yii\web\View $this */

$this->title = 'Welcome to Jubilee Outreach Church';
?>
<div class="site-index">

    <!-- ----------- Hero Section ----------- -->
    <section class="relative w-full px-4 md:px-10 py-5">
        <div class="max-w-[1280px] mx-auto">
            <div class="relative overflow-hidden rounded-2xl min-h-[600px] flex items-center justify-center p-8 bg-cover bg-center"
                style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC_yR7oElfBr8y4zNwKZqC9xl0X3GlWcZ39wNEFb1QETtCQHPh0KMhlmT_oe2NorBVN2s5TC1qXn-7svg7nMT-ct2qjAsI-yY8t1MgXB8drRQi3P73DWeB3XCk70pZTkMXsX6cva9ugzf9s_866kgfRnkA_vJFOTKLkTsH_PTezPhFTxi6m2Rua81zIPkpMIxwd3X_RAIBDcYnZrnSttYCtn6p2FcaTrflb5BbExL6HoHfYYNbB69FbSiRSv8igdhp1BnBtqmYFXi4");'>
                <div class="flex flex-col gap-6 text-center max-w-3xl">
                    <h1 class="text-white text-5xl md:text-7xl font-extrabold leading-tight tracking-tight">
                        A Place to Belong, <br />A Place to Grow
                    </h1>
                    <p class="text-white/90 text-lg md:text-xl font-medium max-w-2xl mx-auto leading-relaxed">
                        Welcome to Jubilee Community Outreach Church. Join us this Sunday and experience the power
                        of community, faith, and transformative worship.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
                        <?= \yii\helpers\Html::a('Join Us This Sunday', ['site/join'], [
                            'class' => 'h-14 px-8 rounded-lg bg-crimson-cta text-white text-lg font-bold shadow-xl shadow-black/20 hover:brightness-110 transition-all text-center flex items-center justify-center',
                        ]) ?>

                        <?= \yii\helpers\Html::a('Watch Live Service', ['site/live'], [
                            'class' => 'h-14 px-8 rounded-lg bg-white/10 backdrop-blur-md border border-white/30 text-white text-lg font-bold hover:bg-white/20 transition-all text-center flex items-center justify-center',
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------- Sunday Order of Service ----------- -->
    <section class="w-full bg-background-light dark:bg-slate-950 py-16">
        <div class="max-w-[1280px] mx-auto px-4 md:px-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 px-4">
                <div class="space-y-2">
                    <span class="text-sky-accent font-bold uppercase tracking-widest text-xs">Full Sunday
                        Experience</span>
                    <h2 class="text-[#111318] dark:text-white text-3xl md:text-4xl font-extrabold">Our Sunday Order of
                        Service</h2>
                </div>
                <p class="text-slate-500 dark:text-slate-400 mt-4 md:mt-0 max-w-md">
                    Join us for any or all parts of our carefully planned Sunday schedule, designed to deepen your
                    faith and connection.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4">

                <!-- Card 1: Prayers -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url("<?= \Yii::getAlias('@web') . '/images/prayer1.jpeg' ?>");'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">8:00 AM - 9:00 AM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Prayers</h3>
                    </div>
                </div>

                <!-- Card 2: Bible Study -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASV6N-G5YBV5ajGj_SfNCQrdxIEA4mJhjLdtfT1ous_bso5ZMe5BS9Zv4rgQN-LRou6QgBfErB3UIOr5JnX1HbNlXz5YxS_YL7-xw9l1kw6YEQVQv1gnqNxQ7gx3T3gxafqrGmH1aevKuWuafgYuLCpcraRCdo5EG0SkASvflxDLvGRidMTj5ObP_YySagmkv9RT7OrFXNg_LQSjDn3nrdg6wzbwBR15MAHLT0FPhbzce6hhM3aS3yy1wJHGUoNYzzV5SgQqOYhFY");'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">9:00 AM - 10:00 AM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Bible Study</h3>
                    </div>
                </div>

                <!-- Card 3: Praise and Worship -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC_yR7oElfBr8y4zNwKZqC9xl0X3GlWcZ39wNEFb1QETtCQHPh0KMhlmT_oe2NorBVN2s5TC1qXn-7svg7nMT-ct2qjAsI-yY8t1MgXB8drRQi3P73DWeB3XCk70pZTkMXsX6cva9ugzf9s_866kgfRnkA_vJFOTKLkTsH_PTezPhFTxi6m2Rua81zIPkpMIxwd3X_RAIBDcYnZrnSttYCtn6p2FcaTrflb5BbExL6HoHfYYNbB69FbSiRSv8igdhp1BnBtqmYFXi4");'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">10:00 AM - 10:30 AM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Praise and Worship</h3>
                    </div>
                </div>

                <!-- Card 4: Prayers (mid-service) -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url(<?= \Yii::getAlias('@web') . '/images/prayers.jpeg' ?>);'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">10:30 AM - 11:00 AM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Prayers</h3>
                    </div>
                </div>

                <!-- Card 5: Sunday School -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url("<?= \Yii::getAlias('@web') . '/images/sunday.JPG' ?>");'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">11:00 AM - 11:30 AM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white leading-tight">Sunday School &amp;
                            Presentations
                        </h3>
                    </div>
                </div>

                <!-- Card 6: Testimonies & Offerings -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBO8EnV7bLuYX2EKI46_Ty7wJAjC0B9xajxY4Le2temnWwndAEy978U0RB7MA1ytFa3Xy6djEiYkgpxT5e4tdJxUYqXb-VbxGHysR_ovfwPGzlM6zRMnOFgYpg-7LYqLOAuYxHpPwtqRVaC0sLpJ3tAOR0Sh7OzlN4JiEoA-lvo5WUSTWddymyMBAgXt5POJoNpVUDzWnul0YLg8iXWhvr0T2yZ4XnG7iliepcOZWthuGIia84Pro29qhivF4gB1NbQt6VqfLGoTwM");'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">11:30 AM - 12:00 PM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Testimonies &amp; Offerings</h3>
                    </div>
                </div>

                <!-- Card 7: Preaching -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url(<?= \Yii::getAlias('@web') . '/images/preaching.jpeg' ?>);'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">12:00 PM - 12:45 PM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Preaching</h3>
                    </div>
                </div>

                <!-- Card 8: Final Prayers -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-slate-100 dark:border-slate-800">
                    <div class="h-32 bg-cover bg-center"
                        style='background-image: url("<?= \Yii::getAlias('@web') . '/images/branches/PastorKawiraMeru.jpeg' ?>");'>
                    </div>
                    <div class="p-5">
                        <span class="text-sky-accent text-sm font-bold block mb-1">12:45 PM - 1:00 PM</span>
                        <h3 class="font-bold text-[#111318] dark:text-white">Final Prayers</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Word from the bishop -->
    <section class="w-full bg-white dark:bg-slate-900 py-24">
        <div class="max-w-[1280px] mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl">
                        <img alt="Rev. Dr. James Jubilee" class="w-full h-full object-cover"
                            src="<?= \Yii::getAlias('@web') . '/images/preaching.jpeg' ?>" />
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-crimson-cta/10 rounded-full blur-3xl -z-10">
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="space-y-2">
                        <span class="text-crimson-cta font-bold uppercase tracking-widest text-xs">Leadership
                            Message</span>
                        <h2 class="text-[#111318] dark:text-white text-3xl md:text-4xl font-extrabold">A Word from
                            the Presiding Minister</h2>
                    </div>
                    <div class="relative">
                        <span class="absolute -top-10 -left-6 text-8xl text-crimson-cta/10 font-serif">“</span>
                        <blockquote
                            class="text-2xl md:text-3xl font-medium text-slate-800 dark:text-slate-200 leading-relaxed italic">
                            Our doors are wide open to everyone, regardless of where you are on your spiritual
                            journey. We believe in a community where love transforms lives and faith finds its true
                            purpose.
                        </blockquote>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="h-px w-12 bg-crimson-cta"></div>
                        <div>
                            <p class="text-xl font-extrabold text-[#111318] dark:text-white">Peter Mugo, Jubilee
                                Community Outreach
                            </p>
                            <p class="text-slate-500 dark:text-slate-400 font-semibold">Bishop &amp;
                                Visionary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------- Mission & Vision ----------- -->
    <section class="w-full bg-slate-50 dark:bg-slate-950 py-20">
        <div class="max-w-[1280px] mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- Mission Card -->
                <div class="relative group h-[400px] rounded-2xl overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700"
                        style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 100%), url(<?= \Yii::getAlias('@web') . '/images/baptism.JPG' ?>)'>
                    </div>
                    <div class="absolute inset-0 flex flex-col justify-end p-10">
                        <span
                            class="bg-primary text-white text-[10px] font-bold uppercase tracking-[3px] py-1 px-3 w-fit rounded mb-4">Core
                            Focus</span>
                        <h2 class="text-white text-3xl font-extrabold mb-4">Our Mission</h2>
                        <p class="text-white/80 text-lg max-w-md font-medium leading-snug">
                            To serve, love, and reach our community for Christ through active outreach and radical
                            hospitality.
                        </p>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="relative group h-[400px] rounded-2xl overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700"
                        style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 100%), url(<?= \Yii::getAlias('@web') . '/images/churchplanting.JPG' ?>)'>
                    </div>
                    <div class="absolute inset-0 flex flex-col justify-end p-10">
                        <span
                            class="bg-sky-accent text-white text-[10px] font-bold uppercase tracking-[3px] py-1 px-3 w-fit rounded mb-4">Our
                            Future</span>
                        <h2 class="text-white text-3xl font-extrabold mb-4">Our Vision</h2>
                        <p class="text-white/80 text-lg max-w-md font-medium leading-snug">
                            A community transformed by faith, where every person discovers their purpose and finds a
                            home.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ----------- CTA Section ----------- -->
    <section class="py-20 px-4">
        <div class="max-w-[800px] mx-auto text-center space-y-8">
            <h2 class="text-4xl font-extrabold text-[#111318] dark:text-white">Ready to join our family?</h2>
            <p class="text-slate-500 dark:text-slate-400 text-xl max-w-2xl mx-auto">
                Whether you're exploring faith for the first time or looking for a new church home, there's a seat
                waiting for you at Jubilee.
            </p>
            <div class="flex justify-center">
                <?= \yii\helpers\Html::a(
                    'Get Started Here <span class="material-symbols-outlined">north_east</span>',
                    ['site/get-started'],
                    [
                        'class' => 'flex items-center gap-3 min-w-[200px] cursor-pointer justify-center rounded-xl h-16 px-8 bg-crimson-cta text-white text-lg font-bold shadow-2xl shadow-crimson-cta/30 hover:scale-105 transition-all',
                        'encode' => false,
                    ]
                ) ?>
            </div>
        </div>
    </section>


</div>