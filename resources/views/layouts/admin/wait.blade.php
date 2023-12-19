<div class=" p-5 flex flex-col justify-between flex-1 overflow-auto">
    <div class="flex flex-col space-y-4 text-gray-500">
        <a class="{{ request()->is('admin') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.home') }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11 9V13.1707C9.83481 13.5825 9 14.6938 9 16C9 17.6569 10.3431 19 12 19C13.6569 19 15 17.6569 15 16C15 14.6938 14.1652 13.5825 13 13.1707V9H11ZM11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16Z"
                    fill="currentColor" />
                <path
                    d="M12 5C15.866 5 19 8.13401 19 12V13H17V12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12V13H5V12C5 8.13401 8.13401 5 12 5Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23ZM12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                    fill="currentColor" />
            </svg>
            <span class=" ml-2 text-sm">Home</span>
        </a>

        <a class="{{ request()->is('admin/investments') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.investments') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            <span class=" ml-2 text-sm">Active Investments</span>
        </a>

        <a class="{{ request()->is('admin/withdrawals') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.withdrawals') }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                    fill="currentColor" />
            </svg>
            <span class=" ml-2 text-sm">Withdrawal Requests</span>
        </a>

        <a class="{{ request()->is('admin/pending') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.pending') }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true" role="img" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                <path fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="3"
                    d="M29 17v11H3V17M2 8h28v8s-6 4-14 4s-14-4-14-4V8Zm14 14v-4m4-10s0-4-4-4s-4 4-4 4" />
            </svg>
            <span class=" ml-2 text-sm">Pending Orders</span>
        </a>

        <a class="{{ request()->is('admin/tokens') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.tokens') }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true" role="img" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 19V8v11Zm0 2q-.825 0-1.412-.587Q2 19.825 2 19V8q0-.825.588-1.412Q3.175 6 4 6h4V4q0-.825.588-1.413Q9.175 2 10 2h4q.825 0 1.413.587Q16 3.175 16 4v2h4q.825 0 1.413.588Q22 7.175 22 8v4.275q-.45-.325-.95-.563q-.5-.237-1.05-.412V8H4v11h7.075q.075.525.225 1.025q.15.5.375.975Zm6-15h4V4h-4Zm8 17q-2.075 0-3.537-1.462Q13 20.075 13 18q0-2.075 1.463-3.538Q15.925 13 18 13t3.538 1.462Q23 15.925 23 18q0 2.075-1.462 3.538Q20.075 23 18 23Zm1.65-2.65l.7-.7l-1.85-1.85V15h-1v3.2Z" />
            </svg>
            <span class=" ml-2 text-sm">Tokens</span>
        </a>

        <a class="{{ request()->is('admin/plans') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.plans') }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true" role="img" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19.924 10.383a1 1 0 0 0-.217-1.09l-5-5l-1.414 1.414L16.586 9H4v2h15a1 1 0 0 0 .924-.617zM4.076 13.617a1 1 0 0 0 .217 1.09l5 5l1.414-1.414L7.414 15H20v-2H5a.999.999 0 0 0-.924.617z" />
            </svg>
            <span class=" ml-2 text-sm">Plans</span>
        </a>

        <a class="{{ request()->is('admin/create') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
            href="{{ route('admin.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true" role="img" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                <g fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="4">
                    <circle cx="14" cy="29" r="5" />
                    <circle cx="34" cy="29" r="5" />
                    <circle cx="24" cy="9" r="5" />
                    <path
                        d="M24 44c0-5.523-4.477-10-10-10S4 38.477 4 44m40 0c0-5.523-4.477-10-10-10s-10 4.477-10 10m10-20c0-5.523-4.477-10-10-10s-10 4.477-10 10" />
                </g>
            </svg>
            <span class=" ml-2 text-sm">Create</span>
        </a>
    </div>

    <div class="flex space-x-2 m-auto">
        <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
            <a href="#">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12Z"
                        fill="currentColor" />
                    <path
                        d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5ZM19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                        fill="currentColor" />
                </svg>
            </a>
        </div>

        <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4.372 7.264a.784.784 0 0 0-.252-.658L2.252 4.339V4H8.05l4.482 9.905L16.472 4H22v.339L20.403 5.88a.472.472 0 0 0-.177.452v11.334a.472.472 0 0 0 .177.452l1.56 1.542V20h-7.844v-.339l1.616-1.58c.159-.16.159-.207.159-.451V8.468l-4.492 11.494h-.606L5.566 8.468v7.704c-.043.323.064.65.29.884l2.101 2.568v.338H2v-.338l2.1-2.568a1.03 1.03 0 0 0 .272-.884V7.264Z" />
                </svg>
            </a>
        </div>

        <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <div class=" bg-primary-800 rounded-lg p-3">
        <div class="flex flex-col space-y-4 text-gray-100">

            {{-- <a class="{{ request()->is('admin/settings') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                href="{{ route('settings') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <span class=" ml-2 text-sm">Account Settings</span>
            </a> --}}

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class=" flex bg-transparent text-gray-100 p-2 pl-3 rounded-sb items-center"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class=" ml-2 text-sm">Log Out</span>
                </a>
            </form>
        </div>
    </div>
</div>