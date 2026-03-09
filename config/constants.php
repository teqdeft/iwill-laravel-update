<?php

return [
    'payment_complete' => 1,
    'payment_pending' => 0,
    'signup-promo' => 'WELL123GO',
    'pro_data_status' => 'inactive',
    'billing-cycle-date' => '0',
    'add_extra_days' => '0',
    'trial_days' => '30',
    'plans' => [
    	'monthly_family_full_plan' => 'Monthly family full plan',
    	'monthly_self_full_plan' => 'Monthly self full plan',
    	'monthly_family_medical_plan' => 'Monthly family medical plan',
    	'monthly_self_medical_plan' => 'Monthly self Medical plan',
    	'monthly_family_counseling_plan' => 'Monthly family counseling plan',
    	'monthly_self_counseling_plan' => 'Monthly self counseling plan'
    ],
    'tel_login_url' => env('LYRIC_API_MODE', 'sandbox') === 'sandbox' 
        ? 'https://staging.getlyric.com/go/api/login' 
        : 'https://portal.getlyric.com/go/api/login',
	
    'tel_api_url' => env('LYRIC_API_MODE', 'sandbox') === 'sandbox'
        ? 'https://staging.getlyric.com/go/api/' 
        : 'https://portal.getlyric.com/go/api/',
	
	
    'tel_email' => env('LYRIC_API_MODE', 'sandbox') === 'sandbox'
        ? 'MTMIWTIW01@mytelemedicine.com'
        : 'MTMIWTIW01@mytelemedicine.com',
	
	
    'tel_password' => env('LYRIC_API_MODE', 'sandbox') === 'sandbox'
        ? 'U74AVL!0oh!Mfeu!o)0p'
        : 'lkL}ScO5v}MHLEzZVGm]',
	
	
    'planid' => env('LYRIC_API_MODE', 'sandbox') === 'sandbox'
        ? 2372
        : 3114,
    'groupCode' => 'MTMIWTIW01',
    

	/*
    'tel_login_url' => 'https://portal.getlyric.com/go/api/login',
    'tel_api_url'=>'https://portal.getlyric.com/go/api/',
    'tel_email'=>'MTMIWTIW01@mytelemedicine.com',
    'tel_password'=>'lkL}ScO5v}MHLEzZVGm]',
    'planid' => 3114,
    'groupCode' => 'MTMIWTIW01',
	*/ 	
	
	'sureScriptPharmacy_id'=>'14157', 
    'age_limit' => '18',
    'start' => 0,
    'length' => 20,
    'status' => 'all',
    'height_feet' => [
        0 => '0\'', 1 => '1\'', 2 => '2\'', 3 => '3\'', 4 => '4\'', 5 => '5\'', 6 => '6\'', 7 => '7\'', 8 => '8\'',
    ],
    'height_inches' => [
        0 => '0"', 1 => '1"', 2 => '2"', 3 => '3"', 4 => '4"', 5 => '5"', 6 => '6"', 7 => '7"', 8 => '8"', 9 => '9"', 10 => '10"', 11 => '11"',
    ],
    'smoke' => [
        '1' => 'No','2' => 'Up to five daily','3' => 'Up to ten daily','4' => 'over 10 cigarettes daily'
    ],
    'drink' => [
        '1' => 'No','2' => 'Rarely','3' => 'Once a month','4' => 'Twice a month','5' => 'Once a week','6' => 'Twice a week', '7' => 'Three times a week', '8' => 'Daily'
    ],
    'exercise' => [
        '1' => 'No','2' => 'Rarely','3' => 'Once a month','4' => 'Twice a month','5' => 'Once a week','6' => 'Twice a week', '7' => 'Three times a week', '8' => 'Daily'
    ],
    'exercise_duration' => [
        '1' => '10 Mins','2' => '20 Mins','3' => '30 Mins','4' => '45 Mins','5' => '60 Mins','6' => 'over 1 hour'
    ],
    'blood_type' => [
        '' => 'Note Sure','1' => 'A','2' => 'B','3' => 'AB','4' => 'O'
    ],
    'marital_status' => [
        '1' => 'Single','2' => 'Married', '3' => 'Widowed'
    ],
    'user_status' => [
        '' => 'Select Status','1' => 'Active','0' => 'Inactive'
    ],
    'relationship' => [
        '' => 'Select Relationship','1' => 'Spouse','2' => 'Child', '3' => 'Other'
    ],
    'roi' => [
        '' => 'Please Choose One','PCP' => 'Visit Primary Care Physician','Urgent Care' => 'Go to Urgent Care', 'Emergency Room' => 'Go to Emergency Room', 'Nothing' => 'Nothing'
    ],
    'minor_age' => 18,
    'family_plan' => [2,4,6,8],
    'organization_plan' => [7,8],
    'allowed_dependents' => 7,
    'APP_USER' => 'user',
    'MODULENAME' => [ 'Dashboard','Users','Roles','Permission','Blogs',
              'Plans','Affiliates Counselors','Promo Codes','Group Counseling','Manage Content','Blog Categories'],



    /* emoji */

    'EMOJI' => [
        ':HAPPY:' => [
            'image' => 'emoji-css/happy.png',
            'mobile_image' => 'images/happy-imozi-svg.svg',
            'number' => 4,
            'child' => [
                ':JOYFUL:' => [
                    ':LIBERATED:' => 'LIBERATED',
                    ':ESTATIC:' => 'ESTATIC',
                    ':OTHER:' => 'OTHER',
                ],
                ':INTERESTED:' => [
                    ':AMUSED:' => 'AMUSED',
                    ':INQUISITIVE:' => 'INQUISITIVE',
                    ':OTHER:' => 'OTHER',
                ],
                ':PROUD:' => [
                    ':IMPORTANT:' => 'IMPORTANT',
                    ':CONFIDENT:' => 'CONFIDENT',
                    ':OTHER:' => 'OTHER',
                ],
                ':ACCEPTED:' => [
                    ':RESPECTED:' => 'RESPECTED',
                    ':FULFILLED:' => 'FULFILLED',
                    ':OTHER:' => 'OTHER',
                ],
                ':POWERFUL:' => [
                    ':COURAGEOUS:' => 'COURAGEOUS',
                    ':PROVOCATIVE:' => 'PROVOCATIVE',
                    ':OTHER:' => 'OTHER',
                ],
                ':PEACEFUL:' => [
                    ':HOPEFUL:' => 'HOPEFUL',
                    ':LOVING:' => 'LOVING',
                    ':OTHER:' => 'OTHER',
                ],
                ':INTIMATE:' => [
                    ':PLAYFUL:' => 'PLAYFUL',
                    ':SENSITIVE:' => 'SENSITIVE',
                    ':OTHER:' => 'OTHER',
                ],
                ':OPTIMISTIC:' => [
                    ':OPEN:' => 'OPEN',
                    ':INSPIRED:' => 'INSPIRED',
                    ':OTHER:' => 'OTHER',
                ],
                ':OTHER:' => [
                    ':OTHER:' => 'OTHER',
                ]
            ]
        ],
        /* sad  */

        ':SAD:' => [
            'image' => 'emoji-css/sad.png',
            'mobile_image' => 'images/sad-imozi-svg.svg',
            'number' => 3,
            'child' => [
                
                ':BORED:' => [
                    ':INDIFFERENT:' => 'INDIFFERENT',
                    ':APATHETIC:' => 'APATHETIC',
                    ':OTHER:' => 'OTHER',
                ],
                ':LONELY:' => [
                    ':ABANDONED:' => 'ABANDONED',
                    ':ISOLATED:' => 'ISOLATED',
                    ':OTHER:' => 'OTHER',
                ],
                ':DEPRESSED:' => [
                    ':INFERIOR:' => 'INFERIOR',
                    ':EMPTY:' => 'EMPTY',
                    ':OTHER:' => 'OTHER',
                ],
                ':DESPAIR:' => [
                    ':POWERLESS:' => 'POWERLESS',
                    ':VULNERABLE:' => 'VULNERABLE',
                    ':OTHER:' => 'OTHER',
                ],
                ':ABANDONED:' => [
                    ':VICTIMIZED:' => 'VICTIMIZED',
                    ':IGNORED:' => 'IGNORED',
                    ':OTHER:' => 'OTHER',
                ],
                ':GUILTY:' => [
                    ':REMORESFUL:' => 'REMORESFUL',
                    ':ASHAMED:' => 'ASHAMED',
                    ':OTHER:' => 'OTHER',
                ],
                ':OTHER:' => [
                    ':OTHER:' => 'OTHER',
                ]
            ]
        ],

        /* DISGUST  */

        ':DISGUST:' => [
            'image' => 'emoji-css/disgust.png',
            'mobile_image' => 'images/disgusted-imozi-svg.svg',
            'number' => 2,
            'child' => [
                ':AVOIDANCE:' => [
                    ':AVERSION:' => 'AVERSION',
                    ':HESITANT:' => 'HESITANT',
                    ':OTHER:' => 'OTHER',
                ],
                ':AWFUL:' => [
                    ':REVULSION:' => 'REVULSION',
                    ':DETESTABLE:' => 'DETESTABLE',
                    ':OTHER:' => 'OTHER',
                ],
                ':DISAPPROVAL:' => [
                    ':REVOLTED:' => 'REVOLTED',
                    ':REPUGNANT:' => 'REPUGNANT',
                    ':OTHER:' => 'OTHER',
                ],
                ':DISAPPOINTED:' => [
                    ':LOATHING:' => 'LOATHING',
                    ':JUDGMENTAL:' => 'JUDGMENTAL',
                    ':OTHER:' => 'OTHER',
                ],
                ':OTHER:' => [
                    ':OTHER:' => 'OTHER',
                ]
            ]
        ],

        /* anger  */

        ':ANGER:' => [
            'image' => 'emoji-css/angry.png',
            'mobile_image' => 'images/angry-imozi-svg.svg',
            'number' => 5,
            'child' => [
                ':CRITICAL:' => [
                    ':SARCASTIC:' => 'SARCASTIC',
                    ':SKEPTICAL:' => 'SKEPTICAL',
                    ':OTHER:' => 'OTHER',
                ],
                ':DISTANT:' => [
                    ':SUSPICIOUS:' => 'SUSPICIOUS',
                    ':WITHDRAWN:' => 'WITHDRAWN',
                    ':OTHER:' => 'OTHER',
                ],
                ':FRUSTRATED:' => [
                    ':IRRITATED:' => 'IRRITATED',
                    ':INFURIATED:' => 'INFURIATED',
                    ':OTHER:' => 'OTHER',
                ],
                ':AGGRESSIVE:' => [
                    ':PROVOKED:' => 'PROVOKED',
                    ':HOSTILE:' => 'HOSTILE',
                    ':OTHER:' => 'OTHER',
                ],
                ':MAD:' => [
                    ':FURIOUS:' => 'FURIOUS',
                    ':ENRAGED:' => 'ENRAGED',
                    ':OTHER:' => 'OTHER',
                ],
                ':HATEFUL:' => [
                    ':VIOLATED:' => 'VIOLATED',
                    ':RESENTFUL:' => 'RESENTFUL',
                    ':OTHER:' => 'OTHER',
                ],
                ':THREATENED:' => [
                    ':JEALOUS:' => 'JEALOUS',
                    ':INSECURE:' => 'INSECURE',
                    ':OTHER:' => 'OTHER',
                ],
                ':HURT:' => [
                    ':DEVASTATED:' => 'DEVASTATED',
                    ':EMBARRASSED:' => 'EMBARRASSED',
                    ':OTHER:' => 'OTHER',
                ],
                ':OTHER:' => [
                    ':OTHER:' => 'OTHER',
                ]
            ]
        ],

         /* fear  */

        ':FEAR:' => [
            'image' => 'emoji-css/fear.png',
            'mobile_image' => 'images/fearful-imozi-svg.svg',
            'number' => 6,
            'child' => [
                ':HUMILIATED:' => [
                    ':DISRESPECTED:' => 'DISRESPECTED',
                    ':RIDICULED:' => 'RIDICULED',
                    ':OTHER:' => 'OTHER',
                ],
                ':REJECTED:' => [
                    ':ALIENATED:' => 'ALIENATED',
                    ':INADEQUATE:' => 'INADEQUATE',
                    ':OTHER:' => 'OTHER',
                ],
                ':SUBMISSIVE:' => [
                    ':INSIGNIFICANT:' => 'INSIGNIFICANT',
                    ':WORTHLESS:' => 'WORTHLESS',
                    ':OTHER:' => 'OTHER',
                ],
                ':INSECURE:' => [
                    ':INFERIOR:' => 'INFERIOR',
                    ':INADEQUATE:' => 'INADEQUATE',
                    ':OTHER:' => 'OTHER',
                ],
                ':ANXIOUS:' => [
                    ':WORRIED:' => 'WORRIED',
                    ':OVERWHELMED:' => 'OVERWHELMED',
                    ':OTHER:' => 'OTHER',
                ],
                ':SCARED:' => [
                    ':FRIGHTENED:' => 'FRIGHTENED',
                    ':TERRIFIED:' => 'TERRIFIED',
                    ':OTHER:' => 'OTHER',
                ],
                ':OTHER:' => [
                    ':OTHER:' => 'OTHER',
                ]
            ]
        ],

         /* surprise  */

        ':SURPRISE:' => [
            'image' => 'emoji-css/surprise.png',
            'mobile_image' => 'images/surpriced-imozi-svg.svg',
            'number' => 1,
            'child' => [
                ':STARTLED:' => [
                    ':SHOCKED:' => 'SHOCKED',
                    ':DISMAYED:' => 'DISMAYED',
                    ':OTHER:' => 'OTHER',
                ],
                ':CONFUSED:' => [
                    ':DISILLUSIONED:' => 'DISILLUSIONED',
                    ':PERPLEXED:' => 'PERPLEXED',
                    ':OTHER:' => 'OTHER',
                ],
                ':AMAZED:' => [
                    ':ASTONISHED:' => 'ASTONISHED',
                    ':AWED:' => 'AWED',
                    ':OTHER:' => 'OTHER',
                ],
                ':EXCITED:' => [
                    ':EAGER:' => 'EAGER',
                    ':ENERGETIC:' => 'ENERGETIC',
                    ':OTHER:' => 'OTHER',
                ],
                ':OTHER:' => [
                    ':OTHER:' => 'OTHER',
                ]
            ]
        ],
    ],

    "meterContant" => [
       "long" =>    'At least 8 characters long',
       "upper" =>  'One uppercase character',
       "lower" =>   'One lowercase character',
       "number" =>  'One number',
       "special" => 'One special character',
    ],

    "awmiPricing" => [
        "Self" => [
            "35.99"
        ],
        "Self + Family" => [
            "49.99"
        ],

    ],


    'CBT_DETAILS' => [
        [
            'title' => 'All or Nothing Thinking',
            'short' => 'That was a Through waste of time',
            'long'  => "<p>If we're taking a small problem and blowing it way out of proportion, we're catastrophizing. Did you make a small mistake at work and find yourself dreading whether someone found out, even though it's nothing serious? You're probably catastrophizing.</p>
           <h4>I'm feeling jittery, I might be having a heart attack.</h4>"
        ],
        [
            'title' => "Emotional Reasoning",
            'short' => "I feel afraid, so i'll have a panic attack",
            'long'  => "<p>
							I feel it, therefore, it must be true.

If you find yourself justifying the 'danger' of something innocuous simply because you're afraid of it, you're likely engaging in emotional reasoning. Things aren't dangerous just because we fear them, and we're not awful just because we may think we are.

                        </p>
                        <p>This one is often hard to recognize. It takes
                            some effort to recognize when your emotional
                            mind is taking the logical reins.
                        </p>
                        <h4>I feel guilty, therefore, I must have done something bad.</h4>"
        ],
        [
            'title' => "Fortune Telling",
            'short' => "I'll get sick at the party",
            'long'  => "<p>I feel it, therefore, it must be true
						If you find yourself justifying the 'danger' of something innocuous because you're afraid of it, then you're likely engaging in emotional reasoning. Things aren't dangerous just because we're afraid of them, and we're not awful just because we may think we are.		
                        </p>
                        <p>This one is often hard to recognize. It takes some effort to notice when your emotional mind is taking the logical reins.</p>
                        <h4>I feel guilty, therefore, I must have done something bad.</h4>"
        ],
    ]

];
