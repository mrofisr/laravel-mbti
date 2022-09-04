       <!-- Desktop sidebar -->
       <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
           <div class="py-4 text-gray-500 dark:text-gray-400">
               <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                   MBTI Admin
               </a>
               <ul class="mt-6">
                   <li class="relative px-6 py-3">
                       <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="/admin/dashboard">
                           <i class="material-icons">home</i>
                           <span class="ml-4">Dashboard</span>
                       </a>
                   </li>
               </ul>
               <ul>
                   <li class="relative px-6 py-3">
                       <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="/admin/report">
                           <i class="material-icons">content_paste</i>
                           <span class="ml-4">Report</span>
                       </a>
                   </li>
               </ul>
           </div>
       </aside>
       <!-- Mobile sidebar -->
       <!-- Backdrop -->
       <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
           x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
           x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0"
           class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
       <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
           x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
           x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
           x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
           @keydown.escape="closeSideMenu">
           <div class="py-4 text-gray-500 dark:text-gray-400">
               <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                   MBTI Admin
               </a>
               <ul class="mt-6">
                   <li class="relative px-6 py-3">
                       <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="/admin">
                           <i class="material-icons">home</i>
                           <span class="ml-4">Dashboard</span>
                       </a>
                   </li>
               </ul>
               <ul>
                   <li class="relative px-6 py-3">
                       <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="/admin/questions">
                           <i class="material-icons">question_answer</i>
                           <span class="ml-4">Questions</span>
                       </a>
                   </li>
                   <li class="relative px-6 py-3">
                       <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="/admin/report">
                           <i class="material-icons">content_paste</i>
                           <span class="ml-4">Report</span>
                       </a>
                   </li>
               </ul>
           </div>
       </aside>