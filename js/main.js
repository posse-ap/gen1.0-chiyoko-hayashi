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
                    isDone: false
                };
                this.todos.push(item);
                this.newItem = '';
            },
            deleteItem: function(index) {
                if (confirm('are you sure?')) {
                    this.todos.splice(index, 1);
                }
            },
            showEditItem() {
                // タスク編集欄が非表示なら表示させる
                if (this.editItemIsShown === false) {
                    this.editItemIsShown = true;
                    // タスク編集欄が表示中なら非表示にする
                } else  {
                    this.editItemIsShown = false;
                }
            },
            // タスク編集メソッド
            editItem(todo) {
                if (this.editComment === '') {
                    alert('タスクを入力してください');
                    return
                }
                // どのテーブルを編集するか絞り込む
                const targetIndex = this.todos.indexOf(todo);
                // spliceでタスクを置換する
                this.todos.splice(targetIndex, 1, {
                    id: targetIndex,
                    comment: this.editComment
                })
                // タスク入力後、inputを空にする
                this.editComment = '';
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
