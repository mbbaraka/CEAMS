 @php
    $staff_id = Auth::id();
    $Study = App\Study::where('staff_id', $staff_id)->get();
    $Course = App\Courses::where('staff_id', $staff_id)->get();
    $CommunityService = App\CommunityService::where('staff_id', $staff_id)->get();
    $Analysis = App\ConstraintAnalysis::where('staff_id', $staff_id)->get();
    $Publication = App\Publication::where('staff_id', $staff_id)->get();
    $PublicLecture = App\PublicLecture::where('staff_id', $staff_id)->get();
    $Skill = App\Skills::where('staff_id', $staff_id)->get();
    $Workshop = App\Workshops::where('staff_id', $staff_id)->get();
    $ResearchGrant = App\ResearchGrants::where('staff_id', $staff_id)->get();
    $ResearchActivity = App\ResearchActivities::where('staff_id', $staff_id)->get();
    $PublicLecture = App\PublicLecture::where('staff_id', $staff_id)->get();
    $Responsibility = App\AdminResponsibility::where('staff_id', $staff_id)->get();
  @endphp
          <div class="col-md-4">
            <div class="card">
              <div class="card-header border-custom pt-1 pb-1">
                <h4 class="text-custom">Staff Achievements</h4>
              </div>
              <div class="card-body border-custom p-0">
                <div class="list-group list-group-flush">
                    <a href="{{ route('studies.index') }}" class="list-group-item list-group-item-action {{ Request::is('studies') ? 'active' : '' }}"><span class="fa fa-graduation-cap" aria-hidden="true"></span> Studies <span class="badge badge-custom float-right">{{$Study->count()}}</span></a>
                    <a href="{{ route('courses.index') }}" class="list-group-item list-group-item-action {{ Request::is('courses') ? 'active' : '' }}"><span class="fa fa-book-reader" aria-hidden="true"></span> Courses Taught <span class="badge badge-custom float-right">{{$Course->count()}}</span></a>
                    <a href="{{ route('publications.index') }}" class="list-group-item list-group-item-action {{ Request::is('publications') ? 'active' : '' }}"><span class="fa fa-newspaper" aria-hidden="true"></span> Publications <span class="badge badge-custom float-right">{{$Publication->count()}}</span></a>
                    <a href="{{ route('meetings.index') }}" class="list-group-item list-group-item-action {{ Request::is('meetings') ? 'active' : '' }}"><span class="fas fa-coffee" aria-hidden="true"></span> Meetings/Workshops <span class="badge badge-custom float-right">{{$Workshop->count()}}</span></a>
                    <a href="{{ route('lectures.index') }}" class="list-group-item list-group-item-action {{ Request::is('lectures') ? 'active' : '' }}"><span class="fas fa-chalkboard-teacher" aria-hidden="true"></span> Public Lectures/Papers Presented <span class="badge badge-custom float-right">{{$PublicLecture->count()}}</span></a>
                    <a href="{{ route('researchactivities.index') }}" class="list-group-item list-group-item-action {{ Request::is('researchactivities') ? 'active' : '' }}"><span class="fa fa-search" aria-hidden="true"></span> Research Activities <span class="badge badge-custom float-right">{{$ResearchActivity->count()}}</span></a>
                    <a href="{{ route('researchgrants.index') }}" class="list-group-item list-group-item-action {{ Request::is('researchgrants') ? 'active' : '' }}"><span class="fab fa-researchgate" aria-hidden="true"></span> Research Grants <span class="badge badge-custom float-right">{{$ResearchGrant->count()}}</span></a>
                    <a href="{{ route('community.index') }}" class="list-group-item list-group-item-action {{ Request::is('community') ? 'active' : '' }}"><span class="fa fa-users" aria-hidden="true"></span> Community Service <span class="badge badge-custom float-right">{{$CommunityService->count()}}</span></a>
                    <a href="{{ route('responsibilities.index') }}" class="list-group-item list-group-item-action {{ Request::is('responsibilities') ? 'active' : '' }}"><span class="fas fa-stamp" aria-hidden="true"></span> Administrative Responsibilities <span class="badge badge-custom float-right">{{$Responsibility->count()}}</span></a>
                    <a href="{{ route('analysis.index') }}" class="list-group-item list-group-item-action {{ Request::is('analysis') ? 'active' : '' }}"><span class="fas fa-chart-line" aria-hidden="true"></span> Const. Analysis and Performance Improvement <span class="badge badge-custom float-right">{{$Analysis->count()}}</span></a>
                    <a href="{{ route('skills.index') }}" class="list-group-item list-group-item-action {{ Request::is('skills') ? 'active' : '' }}"><span class="fa fa-tasks" aria-hidden="true"></span> Additional Skills <span class="badge badge-custom float-right">{{$Skill->count()}}</span></a>
                </div>
              </div>
            </div>
          </div>
