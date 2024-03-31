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

<body class="antialiased   ">
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
                        @include('titleContainer', ['title' => $e->title, 'titleUuid' => $e->titleUuid])
                    @endif
                @else
                    @include('titleContainer', ['title' => $e->title, 'titleUuid' => $e->titleUuid])
                @endif

                @if ($e->note != '')
                    @include('deleteOrUpdateNote', [
                        'id' => $e->noteUUID,
                        'title' => $e->noteUUID,
                        'note' => $e->note,
                        'completed' => $e->completed,
                    ])
                @endif
            @endforeach

            {{-- add task --}}
            {{-- <tr>
                <td class="border-y  min-w-[50px]" colspan="2">
                    <button class="hover:bg-gray-200 w-full text-left px-4">+ New Task</button>
                </td>
            </tr> --}}

        </table>

        @include('gitHub')
    </div>
</body>

</html>
