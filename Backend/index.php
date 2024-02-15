<body>

<div id="app">
    PHP
    <main>
        <div class="container py-4">
            <h1 class="text-center">
                COSE DA FARE
            </h1>
            <div>
                <input type="text" v-model="newTodo">
                <button @click="addTodo()">Aggiungi</button>
            </div>
            <ul>
                <li v-for="single_todo in todo_list" :class="single_todo.done == true ? 'done' : '' ">
                    {{ single_todo.todo }}
                </li>
            </ul>
        </div>
    </main>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- MY JS -->
<script type="text/javascript" src="./js/scripts.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>