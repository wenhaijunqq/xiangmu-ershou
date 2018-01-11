@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

    <!-- 内容区域 -->
    <script src="/admins/js/jquery.min.js"></script>
    <script>
       
    </script>
    <div class="tpl-content-wrapper">
        <div class="container-fluid am-cf">
            <div class="row">
               <div class="am-u-sm-12 am-u-md-12 am-u-lg-6" style="width:100%">
                        <div class="widget am-cf" >
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">评估报告表</div>
                                <div class="widget-function am-fr">
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">
                            <form  method="post" class="am-form tpl-form-line-form">

                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">基本参数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%">
                                                <label for="manufacturer">厂商:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="manufacturer" class="tpl-form-input" name="manufacturer" placeholder="请输入厂商" />
                                            </td>
                                            <td width="20%">
                                                <label for="grade">级别:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="grade" class="tpl-form-input" name="grade" placeholder="请输入级别" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="engine">发动机:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="engine" class="tpl-form-input" name="engine" placeholder="请输入发动机类型" />
                                            </td>
                                            <td>
                                                <label for="gearbox">变速箱:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="gearbox" class="tpl-form-input" name="gearbox" placeholder="请输入变速箱类型" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="body-structure">车身结构:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="body-structure" class="tpl-form-input" name="body-structure" placeholder="请输入车身结构" />
                                            </td>
                                            <td>
                                                <label for="volume">长*宽*高(mm):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="volume" class="tpl-form-input" name="volume" placeholder="请输入长*宽*高(mm)" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="wheel-base">轴距(mm):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="wheel-base" class="tpl-form-input" name="wheel-base" placeholder="请输入轴距(mm)" />
                                            </td>
                                            <td>
                                                <label for="boot">行李箱容积(L):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="boot" class="tpl-form-input" name="boot" placeholder="请输入行李箱容积(L)" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="weight">整备质量(kg):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="weight" class="tpl-form-input" name="weight" placeholder="请输入整备质量(kg)" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">发动机参数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%">
                                                <label for="displacement">排量(L):</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="displacement" class="tpl-form-input" name="displacement" placeholder="请输入排量(L)" />
                                            </td>
                                            <td width="20%">
                                                <label for="air-suction">进气形式:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="air-suction" class="tpl-form-input" name="air-suction" placeholder="请输入进气形式" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="air-cylinder">气缸:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="air-cylinder" class="tpl-form-input" name="air-cylinder" placeholder="请输入气缸类型" />
                                            </td>
                                            <td>
                                                <label for="horsepower">最大马力(Ps):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="horsepower" class="tpl-form-input" name="horsepower" placeholder="请输入最大马力(Ps)" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="torque">最大扭矩(N*m):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="torque" class="tpl-form-input" name="torque" placeholder="请输入最大扭矩(N*m)" />
                                            </td>
                                            <td>
                                                <label for="Fuel-type">燃料类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Fuel-type" class="tpl-form-input" name="Fuel-type" placeholder="请输入燃料类型" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="fuel-oil">燃油标号:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="fuel-oil" class="tpl-form-input" name="fuel-oil" placeholder="请输入燃油标号" />
                                            </td>
                                            <td>
                                                <label for="Oil-drive">供油方式:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Oil-drive" class="tpl-form-input" name="Oil-drive" placeholder="请输入供油方式" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="emission-standard">排放标准:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="emission-standard" class="tpl-form-input" name="emission-standard" placeholder="请输入排放标准" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">底盘及制动</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%">
                                                <label for="drive">驱动方式:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="drive" class="tpl-form-input" name="drive" placeholder="请输入驱动方式" />
                                            </td>
                                            <td width="20%">
                                                <label for="assistance">助力类型:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="assistance" class="tpl-form-input" name="assistance" placeholder="请输入助力类型" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="forward-mounting">前悬挂类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="forward-mounting" class="tpl-form-input" name="forward-mounting" placeholder="请输入前悬挂类型" />
                                            </td>
                                            <td>
                                                <label for="Rear-Suspension">后悬挂类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Rear-Suspension" class="tpl-form-input" name="Rear-Suspension" placeholder="请输入后悬挂类型" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="front-brake">前制动类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="front-brake" class="tpl-form-input" name="front-brake" placeholder="请输入前制动类型" />
                                            </td>
                                            <td>
                                                <label for="rear-brake">后制动类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="rear-brake" class="tpl-form-input" name="rear-brake" placeholder="请输入后制动类型" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="parking-braking">驻车制动类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="parking-braking" class="tpl-form-input" name="parking-braking" placeholder="请输入驻车制动类型" />
                                            </td>
                                            <td>
                                                <label for="Front-Tyre">前轮胎规格:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Front-Tyre" class="tpl-form-input" name="Front-Tyre" placeholder="请输入前轮胎规格" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="rear-tire">后轮胎规格:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="rear-tire" class="tpl-form-input" name="rear-tire" placeholder="请输入后轮胎规格" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">安全配置</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%">
                                                <label for="deputy-airbags">主副驾驶安全气囊:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="deputy-airbags" class="tpl-form-input" name="deputy-airbags" placeholder="请输入主副驾驶安全气囊" />
                                            </td>
                                            <td width="20%">
                                                <label for="side-airbags">前后排侧气囊:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="side-airbags" class="tpl-form-input" name="side-airbags" placeholder="请输入前后排侧气囊" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Head-Airbag">前后排头部气囊:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Head-Airbag" class="tpl-form-input" name="Head-Airbag" placeholder="请输入前后排头部气囊" />
                                            </td>
                                            <td>
                                                <label for="tire-pressure">胎压检测:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="tire-pressure" class="tpl-form-input" name="tire-pressure" placeholder="请输入胎压检测" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="central-locking">车内中控锁:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="central-locking" class="tpl-form-input" name="central-locking" placeholder="请输入车内中控锁" />
                                            </td>
                                            <td>
                                                <label for="ISO-FIX-LATCH">儿童座椅接口:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="ISO-FIX-LATCH" class="tpl-form-input" name="ISO-FIX-LATCH" placeholder="请输入儿童座椅接口" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="KEYLESS-GO">无钥匙启动:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="KEYLESS-GO" class="tpl-form-input" name="KEYLESS-GO" placeholder="请输入无钥匙启动" />
                                            </td>
                                            <td>
                                                <label for="ABS">防抱死系统(ABS):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="ABS" class="tpl-form-input" name="ABS" placeholder="请输入防抱死系统(ABS)" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="ESP">车身稳定控制(ESP):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="ESP" class="tpl-form-input" name="ESP" placeholder="请输入车身稳定控制(ESP)" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">外部配置</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%">
                                                <label for="power-sunroof">电动天窗:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="power-sunroof" class="tpl-form-input" name="power-sunroof" placeholder="请输入电动天窗" />
                                            </td>
                                            <td width="20%">
                                                <label for="panoramic-sunroof">全景天窗:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="panoramic-sunroof" class="tpl-form-input" name="panoramic-sunroof" placeholder="请输入全景天窗" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Electric-suction-door">电动吸合门:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Electric-suction-door" class="tpl-form-input" name="Electric-suction-door" placeholder="请输入电动吸合门" />
                                            </td>
                                            <td>
                                                <label for="Induction-trunk">感应后备箱:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Induction-trunk" class="tpl-form-input" name="Induction-trunk" placeholder="请输入感应后备箱" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="Rain-sensing-Wipers">感应雨刷:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Rain-sensing-Wipers" class="tpl-form-input" name="Rain-sensing-Wipers" placeholder="请输入感应雨刷" />
                                            </td>
                                            <td>
                                                <label for="rear-wiper">后雨刷:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="rear-wiper" class="tpl-form-input" name="rear-wiper" placeholder="请输入后雨刷" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="AND-POWER-WINDOWS">前后电动车窗:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="AND-POWER-WINDOWS" class="tpl-form-input" name="AND-POWER-WINDOWS" placeholder="请输入前后电动车窗" />
                                            </td>
                                            <td>
                                                <label for="power-mirror">后视镜电动调节:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="power-mirror" class="tpl-form-input" name="power-mirror" placeholder="请输入后视镜电动调节" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="warm-mirror">后视镜加热:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="warm-mirror" class="tpl-form-input" name="warm-mirror" placeholder="请输入后视镜加热" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">内部配置</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%">
                                                <label for="MFL">多功能方向盘:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="MFL" class="tpl-form-input" name="MFL" placeholder="请输入多功能方向盘" />
                                            </td>
                                            <td width="20%">
                                                <label for="cruise-control">定速巡航:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="cruise-control" class="tpl-form-input" name="cruise-control" placeholder="请输入定速巡航" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="air-conditioner">空调:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="air-conditioner" class="tpl-form-input" name="air-conditioner" placeholder="请输入空调" />
                                            </td>
                                            <td>
                                                <label for="automatic-air-conditioning">自动空调:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="automatic-air-conditioning" class="tpl-form-input" name="automatic-air-conditioning" placeholder="请输入自动空调" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="GPS">GPS导航:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="GPS" class="tpl-form-input" name="GPS" placeholder="请输入GPS导航" />
                                            </td>
                                            <td>
                                                <label for="car-backing-radar">倒车雷达:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="car-backing-radar" class="tpl-form-input" name="car-backing-radar" placeholder="请输入倒车雷达" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Back-eye-camera">倒车影像系统:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Back-eye-camera" class="tpl-form-input" name="Back-eye-camera" placeholder="请输入倒车影像系统" />
                                            </td>
                                            <td>
                                                <label for="leather-seat">真皮座椅:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="leather-seat" class="tpl-form-input" name="leather-seat" placeholder="请输入真皮座椅" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="seat-heating">前后排座椅加热:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="seat-heating" class="tpl-form-input" name="seat-heating" placeholder="请输入前后排座椅加热" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">事故排查检测</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="20%" style="text-align:center">
                                                <label for="left-frame">左前大灯框架:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="radio" name="left-frame" value="2"/>没有此项
                                                <input type="radio" name="left-frame" value="0" />正常
                                                <input type="radio" name="left-frame" value="1" $('')/>异常
                                                <input type="text" name="left-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="20%" style="text-align:center">
                                                <label for="cruise-control">定速巡航:</label>
                                            </td>
                                            <td width="30%">
                                                <input type="text" id="cruise-control" class="tpl-form-input" name="cruise-control" placeholder="请输入定速巡航" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="air-conditioner">空调:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="air-conditioner" class="tpl-form-input" name="air-conditioner" placeholder="请输入空调" />
                                            </td>
                                            <td style="text-align:center">
                                                <label for="automatic-air-conditioning">自动空调:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="automatic-air-conditioning" class="tpl-form-input" name="automatic-air-conditioning" placeholder="请输入自动空调" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td style="text-align:center">
                                                <label for="GPS">GPS导航:</label>
                                            </td>
                                            <td style="text-align:center">
                                                <input type="text" id="GPS" class="tpl-form-input" name="GPS" placeholder="请输入GPS导航" />
                                            </td>
                                            <td style="text-align:center">
                                                <label for="car-backing-radar">倒车雷达:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="car-backing-radar" class="tpl-form-input" name="car-backing-radar" placeholder="请输入倒车雷达" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Back-eye-camera">倒车影像系统:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Back-eye-camera" class="tpl-form-input" name="Back-eye-camera" placeholder="请输入倒车影像系统" />
                                            </td>
                                            <td style="text-align:center">
                                                <label for="leather-seat">真皮座椅:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="leather-seat" class="tpl-form-input" name="leather-seat" placeholder="请输入真皮座椅" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td style="text-align:center">
                                                <label for="seat-heating">前后排座椅加热:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="seat-heating" class="tpl-form-input" name="seat-heating" placeholder="请输入前后排座椅加热" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    </form>
    
            </div>
        </div>
    </div>

</body>

</html>
@endsection