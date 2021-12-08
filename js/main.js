(function (){
    'use strict';
    
    var vm  = new Vue({
        el: '#app',
        data: {
            newItem: '',
            todos: [],
            task: '',
            editComment: '',
            editItemIsShown: false
        },
        watch : {
            todos: {
                handler: function() {
                    localStorage.setItem('todos', JSON.stringify(this.todos));
                    // alert('Data saved!!!!')
                },
                deep: true
            }
        },
        mounted: function() {
            this.todos = JSON.parse(localStorage.getItem('todos')) || [];
        },
        methods: {
            addItem: function() {
                var item = {
                    title: this.newItem,
                    isDone: false,
                    editComment: '',
                    editItemIsShown: false
                };
                this.todos.push(item);
                this.newItem = '';
            },
            deleteItem: function(index) {
                if (confirm('are you sure?')) {
                    this.todos.splice(index, 1);
                }
            },
            showEditItem: function() {
                // タスク編集欄が非表示なら表示させる
                if (this.editItemIsShown === false) {
                    this.editItemIsShown = true;
                    // タスク編集欄が表示中なら非表示にする
                } else  {
                    this.editItemIsShown = false;
                }
            },
            // タスク編集メソッド
            editItem: function(index) {
                // console.log(this.todos[index].title);
                this.todos[index].title = this.todos[index].editComment;
                this.todos[index].editComment = '';
                this.todos[index].editItemIsShown = false;
            },
            purge: function() {
                if (!confirm('delete finished?')) {
                    return;
                }
                this.todos = this.remaining;
            }
        },
        computed: {
            remaining: function() {
                return this.todos.filter(function(todo) {
                    return !todo.isDone;
                });
            }
        }
    })
})();
