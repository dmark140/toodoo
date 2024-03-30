@if (session()->has('1'))
    <div id="createTitleSuccess" class="text-sm flex items-center p-2 px-4 my-4 text-green-500 rounded-lg bg-green-50 "
        role="alert">
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            Title Added
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-green-500 rounded-lg " onclick="HideModal()"
            data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>




    <script>
        function ShowModal() {
            var element = document.getElementById("createTitleSuccess");
            element.classList.remove("hidden");
        }

        function HideModal() {
            var element = document.getElementById("createTitleSuccess");
            element.classList.add("hidden");
        }
    </script>
@endif
