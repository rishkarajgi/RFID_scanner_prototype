from django.shortcuts import render, get_object_or_404
from django.core.urlresolvers import reverse
from django.http import HttpResponse, HttpResponseRedirect
from manager.models import StudentData


def index(request):
	students=StudentData.objects.all()
	context={'students':students}
	return render(request, 'manager/index.html', context)

def detail(request, rollnumber):
	student= get_object_or_404(StudentData, roll_number=rollnumber)
	cols=list(student._meta.get_all_field_names())
	
	values=[]
	for col in cols:
		values.append(getattr(student, col))
	comb= zip(cols, values)
	context={'student':student, 'cols':cols,'values':values, 'comb':comb }
	return render(request, 'manager/detail.html', context)

def entered(request):
	roll=request.POST['rollno']
	# student= get_object_or_404(StudentData, roll_number=roll)
	return HttpResponseRedirect(reverse('detail', args=(roll,)))

def allstudents(request):
	students=StudentData.objects.all()
	context={'students':students}
	return render(request, 'manager/allstudents.html', context)
