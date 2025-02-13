import React, { useEffect } from "react";
import AOS from "aos";
import "aos/dist/aos.css";

const UniversityPage = () => {
    useEffect(() => {
        AOS.init({ duration: 1000 }); // Initialize AOS with animation duration
    }, []);

    return (
        <div>
            <div
                className="p-6 absolute inset-0 flex flex-col items-center justify-start text-white bg-opacity-50 mt-96"
                data-aos="fade-down"
            >
                <h1 className="text-8xl font-bold mb-4">Hawler Medical University</h1>
                <p className="text-2xl text-center">
                    We provide you with our best scientific experience and professionals
                    for our academics and students to achieve an optimal learning outcome.
                </p>
            </div>

            <section>
                <div
                    className="grid grid-cols-2 items-center justify-between px-20 p-4 pb-20 space-x-6"
                    data-aos="fade-up"
                >
                    <div>
                        <h1 className="text-red-600 text-3xl pb-6 font-semibold">
                            <span className="text-black">HAWLER</span> MEDICAL UNIVERSITY
                        </h1>
                        <p className="text-justify text-gray-500">
                            Hawler Medical University is a public institution of
                            undergraduate and postgraduate higher education...
                        </p>
                    </div>

                    <div>
                        <img
                            className="rounded-xl"
                            src="{{asset('storage/images/UniPresident.jpg')}}"
                            alt=""
                            data-aos="zoom-in"
                        />
                    </div>
                </div>
            </section>
        </div>
    );
};

export default UniversityPage;
