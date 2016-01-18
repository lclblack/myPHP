<{extends file="base.tpl"}>
<{block name="page_name"}>首页<{/block}>
<{block name="container"}>
<div class="row">
    <!--留言板-->
    <div class="col-md-8">
        <div class="panel panel-default chat">
            <div class="panel-heading" id="accordion"><span class="glyphicon glyphicon-comment"></span>留言栏</div>
            <div class="panel-body">
                <ul>
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">李牧云</strong> <small class="text-muted">32 mins ago</small>
                            </div>
                            <p>
                                this is a test!
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="pull-left primary-font">闫凌莺</strong> <small class="text-muted">6 mins ago</small>
                            </div>
                            <p>
                                this is a test too!
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-md" placeholder="写入你的留言..." />
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-md" id="btn-chat">发送</button>
                    </span>
                </div>
            </div>
        </div>
    </div><!--/.col-->
    <!--留言板结束-->
    <div class="col-md-4">
        <div class="panel panel-red">
            <div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-calendar"></span>日历</div>
            <div class="panel-body">
                <div id="calendar"></div>
            </div>
        </div>
        <!--日程列表-->
        <div class="panel panel-blue">
            <div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-check"></span>日程列表</div>
            <div class="panel-body">
                <ul class="todo-list">
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox">第一件要做到事</label>
                        </div>
                        <div class="pull-right action-buttons">
                            <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                            <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                    </li>
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox">第二件要做到事</label>
                        </div>
                        <div class="pull-right action-buttons">
                            <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                            <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-md" placeholder="要做的事..." />
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-md" id="btn-todo">新增</button>
                    </span>
                </div>
            </div>
        </div>
        <!--日程列表结束-->
    </div><!--/.col-->
</div><!--/.row-->
<{/block}>