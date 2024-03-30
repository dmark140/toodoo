<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
</head>

<body class="antialiased">
    <div class="mx-auto w-[480px]  ">
        <div class="text-4xl font-bold">To-dos</div>
        @include('createTitleSuccess')
        @include('createTitleError')

        <table class="mt-4 text-xs">
            {{-- add task group --}}
            @include('createTitle')

            @foreach ($data as $e)
                @if ($loop->index - 1 != -1)
                    @if ($data[$loop->index - 1]->titleUuid != $data[$loop->index]->titleUuid)
                        <tr>
                            <td class="  min-w-[50px]">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="  min-w-[50px]"></td>
                            <td class=" px-4 w-full font-semibold">{{ $e->title }}</td>
                            </td>
                        </tr>
                        <tr>
                            <td class="  min-w-[50px]"></td>
                            <td class=" px-4 w-full font-semibold"> @include('createNote', ['id' => $e->titleUuid]) </td>
                            </td>
                        </tr>
                    @endif
                @else
                    <tr>
                        <td class="  min-w-[50px]">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="  min-w-[50px]"></td>
                        <td class=" px-4 w-full font-semibold">{{ $e->title }}</td>
                        </td>
                    </tr>
                    <tr>
                        <td class="  min-w-[50px]"></td>
                        <td class=" px-4 w-full font-semibold"> @include('createNote', ['id' => $e->titleUuid]) </td>
                        </td>
                    </tr>
                @endif

                @if ($e->note != '')
                    <tr>
                        <td class="border-y border-r min-w-[50px]">
                            <input type="checkbox" class="mt-1 mx-4" />
                        </td>
                        <td class="border-y pl-8 w-full">{{ $e->note }} <div class="float-right">
                                {{ $e->Notecreated_at }}</div>
                        </td>
                    </tr>
                @endif
            @endforeach

            {{-- add task --}}
            {{-- <tr>
                <td class="border-y  min-w-[50px]" colspan="2">
                    <button class="hover:bg-gray-200 w-full text-left px-4">+ New Task</button>
                </td>
            </tr> --}}

        </table>
    </div>
</body>

</html>
