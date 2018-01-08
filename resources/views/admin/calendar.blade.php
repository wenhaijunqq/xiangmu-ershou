@extends('/layout/adminLayout')
@section('title','后台文章')

@section('content')
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/admins/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              禁言小张
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>


            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>
                <li class="sidebar-nav-link">
                    <a href="index.html">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="tables.html">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 表格
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="calendar.html" class="active">
                        <i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="form.html">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="chart.html">
                        <i class="am-icon-bar-chart sidebar-nav-link-logo"></i> 图表

                    </a>
                </li>

                <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="table-list.html">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="table-list-img.html">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="sign-up.html">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="login.html">
                        <i class="am-icon-key sidebar-nav-link-logo"></i> 登录
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="404.html">
                        <i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
                    </a>
                </li>

            </ul>
        </div>



        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">



            <div class="row-content am-cf">
                <div class="tpl-calendar-box">
                    <div id="calendar"></div>
                </div>






            </div>
        </div>
    </div>
    </div>


    <!-- 弹出层 -->

    <div class="am-modal am-modal-no-btn" id="calendar-edit-box">
        <div class="am-modal-dialog tpl-model-dialog">
            <div class="am-modal-hd">
                <a href="javascript: void(0)" class="am-close edit-box-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd tpl-am-model-bd am-cf">

                <form class="am-form tpl-form-border-form">
                    <div class="am-form-group am-u-sm-12">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">标题 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-12">
                            <input type="text" class="tpl-form-input am-margin-top-xs calendar-edit-box-title" id="user-name" placeholder="" disabled>
                        </div>
                    </div>







                </form>

            </div>
        </div>
    </div>
    <script src="/admins/js/moment.js"></script>
    <script src="/admins/js/amazeui.min.js"></script>
    <script src="/admins/js/fullcalendar.min.js"></script>
    <script src="/admins/js/app.js"></script>
    <script>
        $(document).ready(function() {
            var editBox = $('#calendar-edit-box');

            $('.edit-box-close').on('click', function() {
                $('#calendar').fullCalendar('unselect');
            })
            $('#calendar').fullCalendar({

                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                monthNamesShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
                dayNamesShort: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
                today: ["今天"],
                firstDay: 1,
                buttonText: {
                    today: '本月',
                    month: '月',
                    week: '周',
                    day: '日',
                    prev: '上一月',
                    next: '下一月'
                },
                defaultDate: '2016-09-12',
                lang: 'zh-cn',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    var title = prompt('填写你的记录的:');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: end
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                    }
                    $('#calendar').fullCalendar('unselect');



                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                eventClick: function(event, jsEvent, view) {

                    // event.source.events[0].title = '222223333'
                    // 修改数据
                    // 标题
                    $('.calendar-edit-box-title').val(event.title)



                    //  弹出框
                    editBox.modal();





                },
                events: [{
                    id: 1,
                    title: '给她抱抱 叫她包包 喂她吃饱 给她买包',
                    start: '2016-09-01',
                    end: '2016-09-10'
                }, {
                    id: 2,
                    title: '给她抱抱',
                    start: '2016-09-07',
                    end: '2016-09-10'
                }, {
                    id: 3,
                    title: '叫她包包',
                    start: '2016-09-09',
                    end: '2016-09-10'
                }, {
                    id: 4,
                    title: '喂她吃饱',
                    start: '2016-09-16',
                    end: '2016-09-10'
                }, {
                    id: 5,
                    title: '喂她吃饱',
                    start: '2016-09-11',
                    end: '2016-09-13'
                }, {
                    id: 6,
                    title: '喂她吃饱',
                    start: '2016-09-12',
                    end: '2016-09-12'
                }, {
                    id: 7,
                    title: '喂她吃饱',
                    start: '2016-09-12',
                    end: '2016-09-12'
                }, {
                    id: 8,
                    title: '喂她吃饱',
                    start: '2016-09-12',
                    end: '2016-09-12'
                }, {
                    id: 9,
                    title: '喂她吃饱',
                    start: '2016-09-12',
                    end: '2016-09-12'
                }, {
                    id: 10,
                    title: '喂她吃饱',
                    start: '2016-09-12',
                    end: '2016-09-12'
                }, {
                    id: 11,
                    title: 'Birthday Party',
                    start: '2016-09-13',
                    end: '2016-09-12'
                }, {
                    id: 12,
                    title: 'Click for Google',
                    start: '2016-09-28',
                    end: '2016-09-12'
                }]
            });

        });
    </script>
</body>

</html>
@endsection