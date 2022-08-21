# Array-to-Biedi
takes an array of objects and changes them into a biedi file.

Input data like this<br><br>
["MAP_runway_beton",[11833.352,12724.786,3.0517578e-005],199.17528],<br>
["MAP_runway_dirt_1",[12104.935,12714.147,0.00015258789],-70.88578],<br>
["MAP_runway_dirt_2",[12029.501,12740.337,6.1035156e-005],-70.997932],<br>
["MAP_runway_dirt_3",[11953.965,12766.381,3.0517578e-005],-70.944405]

We do need to manually change the final comma into a semicolon<br><br>
["MAP_runway_beton",[11833.352,12724.786,3.0517578e-005],199.17528];<br>
["MAP_runway_dirt_1",[12104.935,12714.147,0.00015258789],-70.88578];<br>
["MAP_runway_dirt_2",[12029.501,12740.337,6.1035156e-005],-70.997932];<br>
["MAP_runway_dirt_3",[11953.965,12766.381,3.0517578e-005],-70.944405]<br><br>

The output will be:<br>
_vehicle_0=objNull;<br>
_this = createVehicle ["MAP_runway_beton",[11833.352,12724.786,3.0517578e-005],199.17528];<br>
_vehicle_0 = _this;<br>
_this setDir 199.17528];<br>
_this setPos [11833.352,12724.786];<br><br>

_vehicle_1=objNull;<br>
_this = createVehicle ["MAP_runway_dirt_1",[12104.935,12714.147,0.00015258789],-70.88578];<br>
_vehicle_1 = _this;<br>
_this setDir -70.88578];<br>
_this setPos [12104.935,12714.147];<br><br>

_vehicle_2=objNull;<br>
_this = createVehicle ["MAP_runway_dirt_2",[12029.501,12740.337,6.1035156e-005],-70.997932];<br>
_vehicle_2 = _this;<br>
_this setDir -70.997932];<br>
_this setPos [12029.501,12740.337];<br><br>

_vehicle_3=objNull;<br>
_this = createVehicle ["MAP_runway_dirt_3",[11953.965,12766.381,3.0517578e-005],-70.944405];<br>
_vehicle_3 = _this;<br>
_this setDir -70.944405];<br>
_this setPos [11953.965,12766.381];<br><br>
