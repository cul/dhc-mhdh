Timeline.GregorianDateLabeller.monthNames.cs=["Leden","�nor","B�ezen","Duben","Kv�ten","�erven","�ervenec","Srpen","Z���","��jen","Listopad","Prosinec"];Timeline.GregorianDateLabeller.dayNames.cs=["Ne","Po","�t","St","�t","P�","So"];Timeline.GregorianDateLabeller.labelIntervalFunctions.cs=function(a,e){var c;var d=false;var b=Timeline.DateTime.removeTimeZoneOffset(a,this._timeZone);switch(e){case Timeline.DateTime.DAY:case Timeline.DateTime.WEEK:c=b.getUTCDate()+". "+(b.getUTCMonth()+1)+".";break;default:return this.defaultLabelInterval(a,e)}return{text:c,emphasized:d}};