<main>

    <style>
        tr.htmx-swapping td {
            opacity: 0;
            transition: opacity 1s ease-out;
        }
    </style>

    <h1>Hello, World</h1>

    <table class="table delete-row-example">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>

        <tbody hx-confirm="Are you sure?" hx-target="closest tr" hx-swap="outerHTML swap:1s">
            <tr>
                <td>Angie MacDowell</td>
                <td>angie@macdowell.org</td>
                <td>Active</td>

                <td>
                    <button class="btn btn-danger" hx-delete="<?php echo INCLUDE_PATH ?>1"> <!-- Send ajax receive from hx-delete -->
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    
<!-- <button hx-trigger='confirmed'
        hx-get="<?php echo INCLUDE_PATH ?>"
        _="on click
             call Swal.fire({title: 'Confirm', text:'Do you want to continue?'})
             if result.isConfirmed trigger confirmed">
  Click Me
</button> -->
</main>