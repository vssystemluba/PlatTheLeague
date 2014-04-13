<!doctype html>
<div class="container-fluid">
	<div id="circle">&nbsp;</div>
		<div class="row-fluid" style="color:black">
			<div id="allChampsTable" style="float:left; width:15%;">
				<table ng-table class="table" data-drop="true" data-jqyoui-options ng-model="allChamps" jqyoui-droppable="{index: $index}">
					<th>
						<input type="text" class="input-large search-query" data-ng-model="allChampFilterQuery" placeholder="Search"/>
						<br>
						All Champions: 
					</th>
					<tr ng-repeat="champ in allChamps | filter:allChampFilterQuery">
						<td>
							<div class="btn btn-draggable" data-drag="true" data-jqyoui-options="{revert: 'invalid'}" ng-model="allChamps" 
							jqyoui-draggable="{index: $index, animate:true, applyFilter:'filterIt'}"
							ng-click="ajaxGetChampInfo(champ.ChampionName.lower)">
								<img src="{{champ.ChampionImageLocation}}" style="width: 20px; height:20px;"></img> {{champ.ChampionName.pretty}}
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div id = "restOfPage" style="width:80%; position:absolute; left:20%;">
				<div id="mapDivs" style="width:50%; position:absolute;">
					<img src="images/season4map.jpg"></img>
					<div class="thumbnail" data-drop="true" data-jqyoui-options ng-model="topLane1"
						jqyoui-droppable="{index: $index, multiple:false}" style="width: 10%; height: 5%; position:absolute; left:5%; top: 20%">
						<p ng-hide="topLane1.length > 0">Team 1 Top</p>
						<div class="btn btn-draggable" ng-repeat="champ in topLane1" data-drag="true" data-jqyoui-options="{revert: 'invalid', animate:true}"
							ng-model="topLane1" jqyoui-draggable="{index: $index}" ng-click="ajaxGetChampInfo(champ.ChampionName.lower)"
							style="width:100%; height:100%; padding:0px;">
							<img src="{{champ.ChampionImageLocation}}" style="width: 20px; height:20px;"></img> {{champ.ChampionName.pretty}}
						</div>
					</div>	
					<div class="thumbnail" style="width: 10%; height: 5%; position:absolute; left:18%; top: 7%" data-drop="true"
						jqyoui-droppable="{index: $index, multiple:false}" data-jqyoui-options ng-model="topLane2">
						<p ng-hide="topLane2.length > 0">Team 2 Top</p>
						<div class="btn btn-draggable" ng-repeat="champ in topLane2" data-drag="true" data-jqyoui-options="{revert: 'invalid', animate:true}"
							ng-model="topLane2" jqyoui-draggable="{index: $index}" ng-click="ajaxGetChampInfo(champ.ChampionName.lower)"
							style="width:100%; height:100%; padding:0px;">
							<img src="{{champ.ChampionImageLocation}}" style="width: 20px; height:20px;"></img> {{champ.ChampionName.pretty}}
						</div>
					</div>	
				</div>
				<div id="statsDiv" style="width:50%;">
				Hi there
				</div>
				{{error}}
			</div>
		</div>
	</div>	
</div>
</html>