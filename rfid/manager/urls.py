from django.conf.urls import patterns, include, url
from manager import views

urlpatterns= patterns('',
	url(r'^index', views.index, name='index'),
	url(r'^(?P<rollnumber>\d+)/$', views.detail, name='detail'),
	url(r'^entered/', views.entered, name='entered'),
	url(r'^allstudents/', views.allstudents, name='allstudents'),
	)