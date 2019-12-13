function chatBot() {
	
	// current user input
	this.input;
	
	this.respondTo = function(input) {
	
		this.input = input.toLowerCase();
		
		if(this.match('(hi|hello|hey|hola|howdy)(\\s|!|\\.|$)'))
			return "Hi! Happy to see you... :-)";

		if(this.match('what is the fee?|course fee?|tution fee|college fee'))
			return "For details, you can call on 1234567890";
		
		
		if(this.match('how are you?'))
			return "I'm good...:-)";
		
		if(this.match('how many courses are available?'))
			return "We offer 4 courses, CO, CM, IF & EJ";

		if(this.match('what is the college timing?') || this.match('college time?') || this.match('college timing?'))
			return "college timing is from 10 AM to 4 PM";
		
		if(this.match('l(ol)+') || this.match('(ha)+(h|$)') || this.match('(he)+(h|$)'))
			return "what's so funny?";
		
		if(this.match('^no+(\\s|!|\\.|$)'))
			return "Ohk...";
		
		if(this.match('(cya|bye|see ya|ttyl|talk to you later)'))
			return ["bye, See you soon", "Nice to talk to you...:-)"];
		
		if(this.match('who are you?')||this.match('what is your name?'))
			return "I am here to assisst you, I'm your friend";
		
		if(this.match('(latesh news|news|information)'))
			return "Theem college of Engineering is affiliated to Mumbai University.The coolege is maintaining high standards of technical & professional education with education with student centered teaching learning process to nature responsible technocrats and professionals";

		if(this.match('approved'))
			return "All India Council for Technical Education,(AICTE) New Delhi";
		
		if(this.match('recongnized'))
			return "Government of Maharashtra & Directorate of Technical Education";
		
		if(this.match('affiliated'))
			return "University of Mumbai & MSBTE Maharshtra";
		
		if(this.match('alumni'))
			return "Please register your Name going back to college website";
		
		if(this.match('degree courses'))
			return "Automobile Engineering,Civil Engineering,Computer Engineering,Electrical Engineering,Electronics & Telecommunication Engineering,Electronics Engineering,Information Engineering";
		
		if(this.match('(diploma courses|courses)'))
			return "Civil Engineering,Computer Engineering,Mechanical Engineering";
		
		if(this.match('library'))
			return "No of Titles of Books (3900),No of Volumes of Books (15000),No of National Journals (38),No of Internationals Journals (18),Reading  Seating Capacity (Total-460,";
	
		
		if(this.match('(training|placement|training and placement|company)'))
			return "The TPC staffs members assist in arranging Pre-Placement Talks, Written Tests, Group Discussions, and Interviews etc. as per the requirements of the Organizations. The members of the team are,Prof.Mukund Kavekar (T&P In-Charge),Prof.A.Jyothi Kumari (Communication Skills),Prof. Surendra Pal (Mechanical Engg),Prof. Anas Dange (I.T Engg),Prof. Vikas Sharma (Computer Engg),Prof. Amjad Ali (Elect &Telecom Engg),Prof. Vijay Kumar Ghanokar (Electronics Engg),Prof.Prashant Priyadarshi(Industrial Liaison) ";
		
		if(this.match('(contact|contact us)'))
			return "Boisar Chilhar Road, Boisar (E),Tal.: Palghar, Dist - Thane, Phone : (02525) 284909/284910,www.theemcoe.org,mail : info@theemcoe.org,Institute Code : EN3222,";
		
		if(this.match('email'))
			return "info@theemcoe.org/principle@theemcoe.org";
		
		if(this.match('phone|contact'))
			return "(02525)284909/284926";
		
		if(this.input == 'noop')
			return;
		
		return input + " what?";
	}
	
	this.match = function(regex) {
	
		return new RegExp(regex).test(this.input);
	}
}