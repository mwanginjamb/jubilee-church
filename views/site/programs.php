<?php

/** @var yii\web\View $this */

$this->title = 'JOC Programs';
?>
<div class="site-index">

    <!-- Hero Section -->
    <section class="max-w-[1280px] mx-auto px-4 sm:px-10 py-5">
        <div class="@container">
            <div class="@[480px]:p-4">
                <div class="flex min-h-[400px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4 relative overflow-hidden"
                    data-alt="Congregation worshipping in a modern church sanctuary"
                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCIYvrzGehT_Kz13FKmqwpmGMVfkAhdlbdX05Rf_QgdUSYPe_lm4nWITQel1OFLPKjC6juPsTZE67tQ4Mlx_1dqVzl9_kh9W3-JMydN6mGfDxu_BM0Ge-zG2TvthR2mNkI8tT7xWHWbH1aN3Ykq8PoHwrUrLF45IepNONfmbQX4-sY7Pf2OkftjDcebiBL9Qzbf4vdjX-_jh0bedd0xFvQwJYbhxsiFOYOxiVE8SpQflagK7qW2lE97-pA7WRqm69tM_enGIkBgbb4");'>
                    <div class="flex flex-col gap-2 text-center relative z-10">
                        <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-6xl">
                            Programs &amp; Events
                        </h1>
                        <p class="text-white/90 text-sm font-normal leading-normal @[480px]:text-lg max-w-2xl mx-auto">
                            Join us in fellowship, growth, and prayer. Our community thrives through consistent
                            gathering and shared experiences.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <button
                            class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold transition-transform hover:scale-105">
                            View Calendar
                        </button>
                        <button
                            class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-white/20 backdrop-blur-md border border-white/30 text-white text-base font-bold transition-transform hover:bg-white/30">
                            Get Directions
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Schedule Section -->
    <section class="max-w-[1280px] mx-auto px-4 sm:px-10 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Column 1: Weekly Programs -->
            <div>
                <div class="flex items-center gap-3 mb-6 px-2">
                    <span class="material-symbols-outlined text-primary text-3xl">calendar_view_week</span>
                    <h2 class="text-2xl font-bold tracking-tight">Weekly Programs</h2>
                </div>
                <div class="space-y-4">
                    <!-- Wed card -->
                    <div
                        class="flex gap-4 p-5 rounded-xl border border-[#dbdfe6] dark:border-gray-800 bg-white dark:bg-background-dark shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="flex flex-col items-center justify-center min-w-[70px] h-[70px] bg-primary/10 rounded-lg text-primary">
                            <span class="text-xs font-bold uppercase">Wed</span>
                            <span class="text-2xl font-black">18:00</span>
                        </div>
                        <div class="flex flex-col justify-center gap-1">
                            <h3 class="text-lg font-bold group-hover:text-primary transition-colors">Mid-week Service
                            </h3>
                            <p class="text-[#616f89] dark:text-gray-400 text-sm">Spiritual nourishment and
                                congregational worship to recharge your week.</p>
                            <div class="flex items-center gap-2 mt-2 text-xs font-semibold text-primary">
                                <span class="material-symbols-outlined text-sm">location_on</span> Main Sanctuary
                            </div>
                        </div>
                    </div>
                    <!-- Thu card -->
                    <div
                        class="flex gap-4 p-5 rounded-xl border border-[#dbdfe6] dark:border-gray-800 bg-white dark:bg-background-dark shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="flex flex-col items-center justify-center min-w-[70px] h-[70px] bg-primary/10 rounded-lg text-primary">
                            <span class="text-xs font-bold uppercase">Thu</span>
                            <span class="text-2xl font-black">19:00</span>
                        </div>
                        <div class="flex flex-col justify-center gap-1">
                            <h3 class="text-lg font-bold group-hover:text-primary transition-colors">Bible Study &amp;
                                Fellowship</h3>
                            <p class="text-[#616f89] dark:text-gray-400 text-sm">A deep dive into the Word. Smaller
                                groups for intimate discussion and growth.</p>
                            <div class="flex items-center gap-2 mt-2 text-xs font-semibold text-primary">
                                <span class="material-symbols-outlined text-sm">menu_book</span> Fellowship Hall
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 2: Monthly Periodic Events -->
            <div>
                <div class="flex items-center gap-3 mb-6 px-2">
                    <span class="material-symbols-outlined text-accent-red text-3xl">event_repeat</span>
                    <h2 class="text-2xl font-bold tracking-tight">Periodic Monthly Events</h2>
                </div>
                <div class="space-y-4">
                    <!-- Fri card -->
                    <div
                        class="flex gap-4 p-5 rounded-xl border border-[#dbdfe6] dark:border-gray-800 bg-white dark:bg-background-dark shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="flex flex-col items-center justify-center min-w-[70px] h-[70px] bg-accent-red/10 rounded-lg text-accent-red">
                            <span class="text-xs font-bold uppercase">Fri</span>
                            <span class="text-2xl font-black">21:00</span>
                        </div>
                        <div class="flex flex-col justify-center gap-1">
                            <div class="flex items-center gap-2">
                                <h3 class="text-lg font-bold group-hover:text-accent-red transition-colors">Night of
                                    Power</h3>
                                <span
                                    class="px-2 py-0.5 rounded-full bg-accent-red text-white text-[10px] font-bold uppercase tracking-wider">Last
                                    Friday</span>
                            </div>
                            <p class="text-[#616f89] dark:text-gray-400 text-sm">Monthly prayer marathon. Come seeking
                                breakthrough and spiritual awakening.</p>
                            <div class="flex items-center gap-4 mt-2">
                                <div class="flex items-center gap-1 text-xs font-semibold text-accent-red">
                                    <span class="material-symbols-outlined text-sm">pan_tool</span> Prayer Session
                                </div>
                                <div class="flex items-center gap-1 text-xs font-semibold text-gray-500">
                                    <span class="material-symbols-outlined text-sm">schedule</span> Until Dawn
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Special Invite -->
                    <div
                        class="p-5 rounded-xl bg-gradient-to-br from-primary to-blue-700 text-white shadow-lg overflow-hidden relative">
                        <div class="absolute right-[-10px] bottom-[-10px] opacity-20">
                            <span class="material-symbols-outlined !text-[120px]">volunteer_activism</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Want to volunteer?</h3>
                        <p class="text-blue-100 text-sm mb-4">Our events are powered by our amazing members. Join a team
                            today!</p>
                        <button
                            class="bg-white text-primary px-4 py-2 rounded-lg font-bold text-sm hover:bg-gray-100 transition-colors">
                            Join Ministry Team
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Yearly Calendar Highlights -->
        <div class="mt-20">
            <div class="flex flex-col items-center text-center mb-10">
                <h2 class="text-3xl font-black tracking-tight mb-2">Yearly Calendar Highlights</h2>
                <div class="h-1.5 w-20 bg-primary rounded-full"></div>
                <p class="mt-4 text-[#616f89] dark:text-gray-400 max-w-xl">Mark your calendars for our flagship annual
                    gatherings. These cornerstone events are designed for deep impact and community building.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- April: Junior Youth Camp -->
                <div
                    class="flex flex-col bg-white dark:bg-background-dark rounded-2xl border border-[#dbdfe6] dark:border-gray-800 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative"
                        data-alt="Kids playing and laughing at an outdoor summer camp">
                        <img alt="Junior Youth Camp"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Joyful children participating in outdoor camp activities"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCv0TsCyB6ERCTMz5nbiV-wDhQVNbA2OhvTNUA-NUepuTwx_A3-qqdxqxwEYCSc8IELzQEMvrUrA7SWVFw6XF85c5NnNtJK4mz53bGMgshP-sKDuN_-jACMfFLjwE0BDho3A3nnkTx1S5o3zWHVDkZ9oUfhqYbdr_IbUk_1OFukqlafyF_x2iqqedoy3t32QzYRfFDz-hdKj1rfktW3IcD60dGEz0_Cp2dcQw4M_FkWUKkw7j-1h5VxU_60E_QScfSWm0mCahv1Gzk" />
                        <div
                            class="absolute top-4 left-4 bg-white/95 dark:bg-background-dark/95 px-3 py-1 rounded-lg text-primary font-bold text-sm shadow-md">
                            APRIL
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined">backpack</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Junior Youth Camp</h3>
                        <p class="text-[#616f89] dark:text-gray-400 text-sm mb-6">Building faith and friendship through
                            outdoor adventures for ages 7-12.</p>
                        <button
                            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary hover:text-white transition-all">
                            Register Interest
                        </button>
                    </div>
                </div>
                <!-- August: Youth Camp -->
                <div
                    class="flex flex-col bg-white dark:bg-background-dark rounded-2xl border border-[#dbdfe6] dark:border-gray-800 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative"
                        data-alt="Teenagers gathering around a campfire at night">
                        <img alt="Youth Camp"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Teens bonding around a campfire under the stars"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz8ohYg9mVNiQRqQ4t630OT21h-Txx7mFkuW1-kE93dA3hTtgSr85x_2HSn0MJzBT9woMLC7KYkU6p_ng-nocBisx7mz1ZtmxdC-Rmm5B7AMDJUmA5POqksP0j5kUPnVmo8nyWgcg5R9-CGJfiGjNeaLAR4DDhY-0UD0Y3wx-0R98UxYJzkURRIRb42hMH1lpsxEJ-2w9OfrSDbYBDg0eZ9enw8D8Jg6hG6mn7ewzXZjs1_l6lSEjtcbMny-O_9wYsa3h9XyuTqmo" />
                        <div
                            class="absolute top-4 left-4 bg-white/95 dark:bg-background-dark/95 px-3 py-1 rounded-lg text-primary font-bold text-sm shadow-md">
                            AUGUST
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined">local_fire_department</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Summer Youth Summit</h3>
                        <p class="text-[#616f89] dark:text-gray-400 text-sm mb-6">Transformative week for teens and
                            young adults focused on purpose and leadership.</p>
                        <button
                            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary hover:text-white transition-all">
                            View Schedule
                        </button>
                    </div>
                </div>
                <!-- October: Conferences -->
                <div
                    class="flex flex-col bg-white dark:bg-background-dark rounded-2xl border border-[#dbdfe6] dark:border-gray-800 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative"
                        data-alt="Large conference hall with people listening to a speaker">
                        <img alt="Annual Conference"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Professional church conference setting with bright stage lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI0q2qv8FjcbAGY3L-d8-_Nrg0k_vdBXrCDf94SkfskVDSvVi6mSVn-8LsRAYxtKzGAjavNolKVewkxrt9P3Q62pVDgfdQCuYrNY3aFOqwVFt__jQRKGx88L3ezxGnRDID3cBxg4X-Y0-YV3wNfkfrkkLigXCk1txBNWZ9TFWa60Jr2JzYeKjNiXU38y5jpRsdJLw4mwgRQCTpxjCZh7MOtT6mB86akUj1miwjlVspb-K_QSfpAl-d-6T_HDYdolXfoANbonK4hDU" />
                        <div
                            class="absolute top-4 left-4 bg-white/95 dark:bg-background-dark/95 px-3 py-1 rounded-lg text-primary font-bold text-sm shadow-md">
                            OCTOBER
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined">podium</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Global Impact Conf.</h3>
                        <p class="text-[#616f89] dark:text-gray-400 text-sm mb-6">Our flagship annual conference
                            featuring guest speakers from across the globe.</p>
                        <button
                            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary hover:text-white transition-all">
                            Reserve Seat
                        </button>
                    </div>
                </div>
                 <!-- May: Men Fellowship -->
                <div
                    class="flex flex-col bg-white dark:bg-background-dark rounded-2xl border border-[#dbdfe6] dark:border-gray-800 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative">
                        <img alt="Men Fellowship"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIYvrzGehT_Kz13FKmqwpmGMVfkAhdlbdX05Rf_QgdUSYPe_lm4nWITQel1OFLPKjC6juPsTZE67tQ4Mlx_1dqVzl9_kh9W3-JMydN6mGfDxu_BM0Ge-zG2TvthR2mNkI8tT7xWHWbH1aN3Ykq8PoHwrUrLF45IepNONfmbQX4-sY7Pf2OkftjDcebiBL9Qzbf4vdjX-_jh0bedd0xFvQwJYbhxsiFOYOxiVE8SpQflagK7qW2lE97-pA7WRqm69tM_enGIkBgbb4" />
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div
                            class="absolute top-4 left-4 bg-white/95 dark:bg-background-dark/95 px-3 py-1 rounded-lg text-primary font-bold text-sm shadow-md z-10">
                            MAY
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Men Fellowship</h3>
                        <p class="text-[#616f89] dark:text-gray-400 text-sm mb-6">A gathering for men to grow in faith,
                            brotherhood, and leadership through shared experiences.</p>
                        <button
                            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary hover:text-white transition-all">
                            Register Interest
                        </button>
                    </div>
                </div><!-- June: Women Conference -->
                <div
                    class="flex flex-col bg-white dark:bg-background-dark rounded-2xl border border-[#dbdfe6] dark:border-gray-800 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative">
                        <img alt="Women Conference"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI0q2qv8FjcbAGY3L-d8-_Nrg0k_vdBXrCDf94SkfskVDSvVi6mSVn-8LsRAYxtKzGAjavNolKVewkxrt9P3Q62pVDgfdQCuYrNY3aFOqwVFt__jQRKGx88L3ezxGnRDID3cBxg4X-Y0-YV3wNfkfrkkLigXCk1txBNWZ9TFWa60Jr2JzYeKjNiXU38y5jpRsdJLw4mwgRQCTpxjCZh7MOtT6mB86akUj1miwjlVspb-K_QSfpAl-d-6T_HDYdolXfoANbonK4hDU" />
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div
                            class="absolute top-4 left-4 bg-white/95 dark:bg-background-dark/95 px-3 py-1 rounded-lg text-primary font-bold text-sm shadow-md z-10">
                            JUNE
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined">female</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Women Conference</h3>
                        <p class="text-[#616f89] dark:text-gray-400 text-sm mb-6">An empowering annual conference
                            designed to inspire and equip women of all ages.</p>
                        <button
                            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary hover:text-white transition-all">
                            Register Interest
                        </button>
                    </div>
                </div><!-- August: Evangelism Mission -->
                <div
                    class="flex flex-col bg-white dark:bg-background-dark rounded-2xl border border-[#dbdfe6] dark:border-gray-800 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative">
                        <img alt="Evangelism Mission"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCv0TsCyB6ERCTMz5nbiV-wDhQVNbA2OhvTNUA-NUepuTwx_A3-qqdxqxwEYCSc8IELzQEMvrUrA7SWVFw6XF85c5NnNtJK4mz53bGMgshP-sKDuN_-jACMfFLjwE0BDho3A3nnkTx1S5o3zWHVDkZ9oUfhqYbdr_IbUk_1OFukqlafyF_x2iqqedoy3t32QzYRfFDz-hdKj1rfktW3IcD60dGEz0_Cp2dcQw4M_FkWUKkw7j-1h5VxU_60E_QScfSWm0mCahv1Gzk" />
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div
                            class="absolute top-4 left-4 bg-white/95 dark:bg-background-dark/95 px-3 py-1 rounded-lg text-primary font-bold text-sm shadow-md z-10">
                            AUGUST
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Evangelism Mission</h3>
                        <p class="text-[#616f89] dark:text-gray-400 text-sm mb-6">A community-focused outreach mission
                            dedicated to sharing hope and faith across the region.</p>
                        <button
                            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary hover:text-white transition-all">
                            Join Mission
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>