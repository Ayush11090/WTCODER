package com.example.demo;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class ResultController {

    @GetMapping("/")
    public String showForm(Model model) {
        model.addAttribute("studentResult", new StudentResult());
        return "result-form";
    }

    @PostMapping("/calculateGrade")
    public String calculateGrade(@ModelAttribute StudentResult studentResult, Model model) {
        calculateGrades(studentResult);
        model.addAttribute("studentResult", studentResult);
        return "result";
    }

    private void calculateGrades(StudentResult studentResult) {
        studentResult.setDataStructureGrade(calculateGradeFromMarks(studentResult.getDataStructureMarks()));
        studentResult.setOperatingSystemGrade(calculateGradeFromMarks(studentResult.getOperatingSystemMarks()));
        studentResult.setTheoryOfComputationGrade(calculateGradeFromMarks(studentResult.getTheoryOfComputationMarks()));
        studentResult.setCoaGrade(calculateGradeFromMarks(studentResult.getCoaMarks()));
        studentResult.setEdiGrade(calculateGradeFromMarks(studentResult.getEdiMarks()));
    }

    private String calculateGradeFromMarks(int marks) {
        if (marks >= 90 && marks <= 100) {
            return "A+";
        } else if (marks >= 80 && marks < 90) {
            return "A";
        } else if (marks >= 70 && marks < 80) {
            return "B+";
        } else if (marks >= 60 && marks < 70) {
            return "B";
        } else if (marks >= 50 && marks < 60) {
            return "C+";
        } else if (marks >= 35 && marks < 50) {
            return "C";
        } else {
            return "F";
        }
    }
}
