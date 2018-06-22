from django.urls import path, include, re_path
from . import views

urlpatterns = [
    re_path(r'^$', views.index, name= 'index'),
    re_path(r'^details/(?P<id>\d+)/$', views.details, name= 'details')
    ]